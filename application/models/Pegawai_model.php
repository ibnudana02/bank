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
        $this->db->select('pegawai.id_pegawai, pegawai.nama, pegawai.parent_job, pegawai.tag, jabatan.jabatan')
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
        $this->nama = htmlspecialchars(strtoupper($post['nama']));
        $this->db->insert($this->_table, $this);
    }

    public function getPegawai()
    {
        $this->db->select('pegawai.id_pegawai, pegawai.nama, pegawai.parent_job, pegawai.tag, jabatan.jabatan')
            ->from($this->_table);
        $this->db->join('jabatan', 'pegawai.id_jabatan = jabatan.id_jabatan', 'left');
        $this->db->order_by('jabatan.jabatan', 'Asc');
        return $this->db->get();
    }

    public function getMan()
    {
        $this->db->select('*')
            ->from($this->_table);
        $this->db->join('jabatan', 'pegawai.id_jabatan = jabatan.id_jabatan', 'left');
        $this->db->where('manajemen', 1);
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
