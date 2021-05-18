<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Jabatan_model extends CI_Model
{
    private $_table = 'jabatan';
    public $id_jabatan;
    public $jabatan;
    public $alias;

    public function getAll()
    {
        $this->db->select('*')
            ->from($this->_table)
            ->where('deleted', '0');
        $this->db->order_by('jabatan', 'asc');

        return $this->db->get()->result();
    }

    public function getByID($id)
    {
        $this->db->where('id_jabatan', $id);
        return $this->db->get($this->_table);
    }

    public function delete($id)
    {
        $object = array('deleted' => 1);
        $this->db->where('id_jabatan', $id);
        $this->db->update($this->_table, $object);
    }

    public function save()
    {
        $post = $this->input->post();
        $this->id_jabatan = uniqid();
        $this->jabatan = htmlspecialchars(strtoupper($post['jabatan']));
        $this->alias = htmlspecialchars(strtoupper($post['alias']));

        $this->db->insert($this->_table, $this);
    }

    public function update($id)
    {
        $post = $this->input->post();
        $this->jabatan = htmlspecialchars(strtoupper($post['jabatan']));
        $this->alias = htmlspecialchars(strtoupper($post['alias']));
        $this->db->where('id_jabatan', $id);
        $this->db->update($this->_table, $this);
    }
}
