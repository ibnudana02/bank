<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Berita_model extends CI_Model
{
    private $_table = 'berita';
    public $id_berita;
    public $id_kategori;
    public $judul;
    public $slug;
    public $isi;
    public $image;
    public $thumb;
    public $penulis;
    public $created_on;
    public $update_by;
    public $update_on;

    public function getAll()
    {
        $this->db->select('*, berita.image as gambar, user.image as profil')
            ->from($this->_table)
            ->join('kategori', 'kategori.id_kategori = berita.id_kategori')
            ->join('user', 'user.id_user=berita.penulis', 'left');
        $this->db->order_by($this->_table . '.created_on', 'desc');
        return $this->db->get();
    }

    public function getLima()
    {
        $this->db->select('*')
            ->from($this->_table)
            ->join('kategori', 'kategori.id_kategori = berita.id_kategori')
            ->limit(3);
        $this->db->order_by($this->_table . '.created_on', 'desc');


        return $this->db->get()->result();
    }

    public function getById($id)
    {
        return $this->db->get_where($this->_table, ['id_berita' => $id])->row();
    }
    public function getBySlug($slug)
    {
        // return $this->db->get_where($this->_table, ['slug' => $slug])->row();
        $this->db->select('*')
            ->from($this->_table);
        $this->db->join('kategori', $this->_table . '.id_kategori = kategori.id_kategori', 'left');
        $this->db->where('slug', $slug);
        return $this->db->get();
    }

    public function getKategori($kategori)
    {
        $this->db->select('*')
            ->from($this->_table);
        $this->db->join('kategori', $this->_table . '.id_kategori = kategori.id_kategori', 'left');
        $this->db->where('link', $kategori);
        return $this->db->get();
    }

    public function getCount()
    {
        return $this->db->get($this->_table);
    }

    public function save()
    {
        date_default_timezone_set('Asia/Jakarta');
        $post = $this->input->post();
        $this->id_berita = uniqid();
        $this->id_kategori = htmlspecialchars($post['kategori']);
        $this->judul = htmlspecialchars(strtolower($post['judul']));
        $out = explode(" ", $this->judul);
        $this->slug = implode("-", $out);
        $this->isi = htmlspecialchars($post['isi']);
        $files = $this->_uploadImage();
        // print_r($files);
        // die;
        $this->image = $files['image'];
        $this->thumb = $files['thumbnail'];
        $this->penulis = $this->session->userdata('id_user');
        $this->created_on = date('Y-m-d H:i:s');
        $this->update_by = '';
        $this->update_on = date('Y-m-d H:i:s');
        $this->db->insert($this->_table, $this);
    }

    public function update()
    {
        date_default_timezone_set('Asia/Jakarta');
        $post = $this->input->post();
        $this->id_berita = htmlspecialchars($post['id_berita']);
        $this->id_kategori = htmlspecialchars($post['kategori']);
        $this->judul = htmlspecialchars(strtolower($post['judul']));
        $out = explode(" ", $this->judul);
        $this->slug = implode("-", $out);
        $this->isi = htmlspecialchars($post['isi']);
        if (!empty($_FILES["image"]["name"])) {
            $this->image = $this->_uploadImage();
        } else {
            $this->image = $post["old_image"];
        }
        $this->penulis = $post['penulis'];
        $this->created_on = date('Y-m-d H:i:s');
        $this->update_by = $this->session->userdata('id_user');
        $this->update_on = date('Y-m-d H:i:s');
        return $this->db->update($this->_table, $this, array('id_berita' => $post['id_berita']));
    }

    private function _uploadImage()
    {
        $config['upload_path'] = './upload/berita/';
        $config['allowed_types'] = 'gif|jpg|png|jpeg';
        $config['file_name'] = $this->id_berita;
        $config['overwrite'] = true;
        $config['max_size'] = 2048;

        $this->upload->initialize($config);

        if (!$this->upload->do_upload('image')) {
            $this->session->set_flashdata('message', $this->upload->display_errors());
            redirect('admin/berita');
        } else {
            $gbr = $this->upload->data();
            //Compress Image
            $set['image_library'] = 'gd2';
            $set['source_image'] = './upload/berita/' . $gbr['file_name'];
            $set['create_thumb'] = TRUE;
            $set['maintain_ratio'] = FALSE;
            $set['width'] = 300;
            $set['height'] = 300;
            $this->load->library('image_lib', $set);
            $this->image_lib->resize();

            $image = array('image' => $gbr['file_name'], 'thumbnail' => $gbr['raw_name'] . '_thumb' . $gbr['file_ext']);
            // print_r($image);
            // die;
            return $image;
        }
    }

    public function delete($id)
    {
        $this->_deleteImage($id);
        return $this->db->delete($this->_table, array('id_berita' => $id));
    }

    private function _deleteImage($id)
    {
        $berita = $this->getById($id);
        if ($berita->image != null && $berita->thumb != null) {
            unlink("./upload/berita/" . $berita->image);
            unlink("./upload/berita/" . $berita->thumb);
        }
    }
}
