<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Produk_model extends CI_Model
{
    private $_table = 'produk';
    public $produk;
    public $deskripsi;
    public $slug;
    public $link;
    public $untuk;
    public $jenis;
    public $image;
    public $thumb;
    public $penulis;
    public $created_on;
    public $update_by;
    public $update_on;

    public function save()
    {
        date_default_timezone_set('Asia/Jakarta');
        $post = $this->input->post();
        $this->id_produk = uniqid();
        $this->produk = htmlspecialchars($post['produk']);
        $this->deskripsi = $post['deskripsi'];
        $out = explode(" ", $this->produk);
        $this->slug = implode("-", $out);
        $this->link = htmlspecialchars($post['link']);
        $this->untuk = $post['untuk'];
        $this->jenis = $post['jenis'];
        $files = $this->_uploadImage();
        $this->image = $files['image'];
        $this->thumb = $files['thumbnail'];
        $this->penulis = $this->session->userdata('name');
        $this->created_on = date('Y-m-d H:i:s');
        $this->update_by = '';
        $this->db->insert($this->_table, $this);
    }

    public function update()
    {
        date_default_timezone_set('Asia/Jakarta');
        $post = $this->input->post();
        $this->id_produk = $post['id'];
        $this->produk = htmlspecialchars($post['produk']);
        $this->deskripsi = $post['deskripsi'];
        $out = explode(" ", $this->produk);
        $this->slug = implode("-", $out);
        $this->link = $post['link'];
        $this->jenis = $post['jenis'];
        if (!empty($_FILES["image"]["name"])) {
            $files = $this->_uploadImage();
            $this->image = $files['image'];
            $this->thumb = $files['thumbnail'];
        } else {
            $this->image = $post["old_image"];
        }
        $this->update_by = $this->session->userdata('name');
        $this->update_on = date('Y-m-d H:i:s');
        return $this->db->update($this->_table, $this, array('id_produk' => $post['id']));
    }

    public function getBySlug($slug)
    {
        $this->db->select('*')
            ->from($this->_table);
        $this->db->join('jenis', $this->_table . '.jenis = jenis.id_jenis', 'left');
        $this->db->where('slug', $slug);
        return $this->db->get()->row();
    }

    public function getById($id)
    {
        return $this->db->get_where($this->_table, ['id_produk' => $id])->row();
    }

    public function delete($id)
    {
        $this->_deleteImage($id);
        return $this->db->delete($this->_table, array('id_produk' => $id));
    }

    private function _deleteImage($id)
    {
        $produk = $this->getById($id);
        if ($produk->image != null && $produk->thumb != null) {
            unlink("./upload/produk/" . $produk->image);
            unlink("./upload/produk/" . $produk->thumb);
        }
    }

    private function _uploadImage()
    {
        $config['upload_path'] = './upload/produk/';
        $config['allowed_types'] = 'gif|jpg|png';
        $config['file_name'] = $this->id_produk;
        $config['overwrite'] = true;
        $config['max_size'] = 1024;

        $this->upload->initialize($config);

        if (!$this->upload->do_upload('image')) {
            $this->session->set_flashdata('message', $this->upload->display_errors());
            redirect('admin/add_produk');
        } else {
            // return $this->upload->file_name;
            $gbr = $this->upload->data();
            //Compress Image
            $config['image_library'] = 'gd2';
            $config['source_image'] = './upload/produk/' . $gbr['file_name'];
            $config['create_thumb'] = TRUE;
            $config['maintain_ratio'] = FALSE;
            $config['width'] = 300;
            $config['height'] = 300;
            $this->load->library('image_lib', $config);
            $this->image_lib->resize();

            $image = array('image' => $gbr['file_name'], 'thumbnail' => $gbr['raw_name'] . '_thumb' . $gbr['file_ext']);
            return $image;
        }
    }

    public function getAll()
    {
        $this->db->select('*')
            ->from($this->_table)
            ->join('jenis', $this->_table . '.jenis=jenis.id_jenis');
        return $this->db->get()->result();
    }

    public function getCount()
    {
        // return $this->db->get($this->_table);
        return $this->db->get($this->_table);
    }

    public function getPmb()
    {
        $this->db->select('*')
            ->from($this->_table)
            ->join('jenis', $this->_table . '.jenis=jenis.id_jenis');
        $this->db->where('id_produk', '5e96bd2139efc');
        return $this->db->get()->row();
    }

    public function getLayanan()
    {
        $this->db->select('*')
            ->from($this->_table)
            ->join('jenis', $this->_table . '.jenis=jenis.id_jenis');
        $this->db->where($this->_table . '.jenis', '5ebc8092d915b');
        return $this->db->get();
    }

    public function getPayment()
    {
        $this->db->select('*')
            ->from($this->_table)
            ->join('jenis', $this->_table . '.jenis=jenis.id_jenis');
        $this->db->where('id_produk', '5ef051b1b36da');
        return $this->db->get()->row();
    }

    public function getTab()
    {
        $this->db->select('*')
            ->from($this->_table)
            ->join('jenis', 'produk.jenis=jenis.id_jenis')
            ->where('id_jenis', '5e9545a2ecf3e')
            ->order_by('produk', 'asc');
        return $this->db->get();
    }

    public function getKrd()
    {
        $this->db->select('*')
            ->from($this->_table)
            ->join('jenis', 'produk.jenis=jenis.id_jenis')
            ->where('id_jenis', '5e95459d30794')
            ->order_by('produk', 'asc');
        return $this->db->get();
    }

    public function getDep()
    {
        $this->db->select('*')
            ->from($this->_table)
            ->join('jenis', 'produk.jenis=jenis.id_jenis')
            ->where('id_jenis', '5e954595bcb46')
            ->order_by('produk', 'asc');
        return $this->db->get();
    }

    public function getDana()
    {
        $this->db->select('*')
            ->from($this->_table)
            ->join('jenis', 'produk.jenis=jenis.id_jenis');
        $this->db->where_in('id_jenis', '5e954595bcb46');
        $this->db->or_where_in('id_jenis', '5e9545a2ecf3e');
        return $this->db->get();
    }

    public function getProfesi()
    {
        $this->db->select('id, nm_pekerjaan');
        return $this->db->get('pekerjaan');
    }
}

/* End of file Porduk_model.php */
