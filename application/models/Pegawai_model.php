<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Pegawai_model extends CI_Model
{

    private $_table = 'pegawai';
    public $id_pegawai;
    public $id_jabatan;
    // public $parent_job;
    public $nama;

    public function getAll()
    {
        $this->db->select('*')
            ->from($this->_table);
        $this->db->join('jabatan', 'pegawai.id_jabatan = jabatan.id_jabatan', 'left');
        $this->db->order_by('pegawai.nama', 'Asc');
        return $this->db->get();
    }

    public function save()
    {
        $post = $this->input->post();
        $this->id_pegawai = uniqid();
        $this->id_jabatan = htmlspecialchars($post['jabatan']);
        $this->parent_job = htmlspecialchars($post['atasan']);
        $this->tag = htmlspecialchars($post['tag']);
        $this->nama = htmlspecialchars(strtoupper($post['nama']));
        $this->db->insert($this->_table, $this);
    }
    public function update($id)
    {
        $post = $this->input->post();
        $this->id_pegawai = htmlspecialchars($post['jabatan']);
        $this->id_jabatan = htmlspecialchars($post['jabatan']);
        $this->parent_job = htmlspecialchars($post['atasan']);
        $this->tag = htmlspecialchars($post['tag']);
        $this->nama = htmlspecialchars(strtoupper($post['nama']));
        $files = $this->_uploadImage();
        $this->foto = $files['foto'];
        // print_r($this);
        // die;
        $this->db->where('id_pegawai', $id);
        $this->db->update($this->_table, $this);
    }

    private function _uploadImage()
    {
        $config['upload_path'] = './upload/pegawai/';
        $config['allowed_types'] = 'gif|jpg|png|jpeg';
        $config['file_name'] = $this->id_pegawai;
        $config['overwrite'] = true;
        $config['max_size'] = 1024;

        $this->upload->initialize($config);

        if (!$this->upload->do_upload('gambar')) {
            $this->session->set_flashdata(
                'message',
                '<div class="alert alert-success alert-dismissible fade show" role="alert">' . $this->upload->display_errors() . '
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span></button></div>'
            );
            redirect(current_url());
        } else {
            $gbr = $this->upload->data();
            //Compress Image
            $set['image_library'] = 'gd2';
            $set['source_image'] = './upload/pegawai/' . $gbr['file_name'];
            // $set['create_thumb'] = TRUE;
            $set['maintain_ratio'] = FALSE;
            $set['width'] = 520;
            $set['height'] = 640;
            $this->load->library('image_lib', $set);
            $this->image_lib->resize();

            $image = array('foto' => $gbr['file_name'], 'thumbnail' => $gbr['raw_name'] . '_thumb' . $gbr['file_ext']);
            // print_r($image);
            // die;
            return $image;
        }
    }

    public function getPegawai()
    {
        $this->db->select('pegawai.id_pegawai, pegawai.nama, pegawai.parent_job, pegawai.tag, jabatan.jabatan')
            ->from($this->_table);
        $this->db->join('jabatan', 'pegawai.id_jabatan = jabatan.id_jabatan', 'left');
        $this->db->order_by('jabatan.jabatan', 'Asc');
        return $this->db->get();
    }

    public function getAtasan()
    {
        $this->db->select('pegawai.id_pegawai, pegawai.parent_job, 
            pegawai.tag, jabatan.jabatan, pegawai.manajemen');
        $this->db->where('pegawai.manajemen !=', 0);
        $this->db->order_by('jabatan.jabatan', 'asc');
        $this->db->join('jabatan', 'jabatan.id_jabatan = pegawai.id_jabatan', 'inner');
        return $this->db->get('pegawai');
    }

    public function getMan()
    {
        $this->db->select('*')
            ->from($this->_table);
        $this->db->join('jabatan', 'pegawai.id_jabatan = jabatan.id_jabatan', 'left');
        $this->db->where('manajemen', 1);
        $this->db->order_by('jabatan', 'desc');

        $this->db->limit(4);
        return $this->db->get();
    }

    public function getById($id)
    {
        return $this->db->get_where($this->_table, ['id_pegawai' => $id])->row();
    }

    public function delete($id)
    {
        $this->_deleteImage($id);
        return $this->db->delete($this->_table, array('id_pegawai' => $id));
    }

    private function _deleteImage($id)
    {
        $pegawai = $this->getById($id);
        if ($pegawai->image != null) {
            $filename = explode(".", $pegawai->image)[0];
            return array_map('unlink', glob(FCPATH . "upload/pegawai/$filename.*"));
        }
    }
}

/* End of file Pegawai_model.php */
