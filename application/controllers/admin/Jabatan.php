<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Jabatan extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $nama = $this->session->has_userdata('name');
        if (empty($nama)) {

            redirect('admin', 'refresh');
        } elseif ($this->session->userdata('role_id') !== "1") {
            $this->session->sess_destroy();
            redirect(base_url());
        }
        $this->load->model('Jabatan_model', 'jabatan');
    }

    public function jabatan()
    {
        $data['title'] = 'Jabatan';
        $data['heading'] = 'Dashboard';
        $data['user'] = $this->db->get_where('user', ['name' => $this->session->userdata('name')])->row_array();
        $data['data'] = $this->jabatan->getAll();
        $data['judul'] = 'BPR Unisritama - Administrator';
        $this->load->view('template/admin_header', $data);
        $this->load->view('admin/jabatan');
        $this->load->view('template/admin_footer');
    }

    public function tambahJabatan()
    {
        $this->form_validation->set_rules('jabatan', 'Jabatan', 'trim|required');
        $this->form_validation->set_rules('alias', 'Alias', 'trim|required');
        $jabatan = $this->jabatan;
        if ($this->form_validation->run()) {
            $jabatan->save();
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Berhasil tambah Jabatan!</div>');
            redirect('admin/jabatan', 'refresh');
        } else {
            $data['title'] = 'Jabatan';
            $data['heading'] = 'Dashboard';
            $data['user'] = $this->db->get_where('user', ['name' => $this->session->userdata('name')])->row_array();
            $data['data'] = $this->jabatan->getAll();
            $data['judul'] = 'BPR Unisritama - Administrator';
            $this->load->view('template/admin_header', $data);
            $this->load->view('admin/jabatan');
            $this->load->view('template/admin_footer');

            // redirect('admin/jabatan');
        }
    }

    public function edit_jab($id)
    {
        $this->form_validation->set_rules('jabatan', 'Jabatan', 'trim|required');
        $this->form_validation->set_rules('jabatan', 'Alias', 'trim|required');
        $jabatan = $this->jabatan;
        if ($this->form_validation->run()) {
            $jabatan->update($id);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Berhasil update Jabatan!</div>');
            redirect('admin/jabatan', 'refresh');
        } else {
            $data['title'] = 'Administrator - Jabatan';
            $data['heading'] = 'Dashboard';
            $data['data'] = $this->jabatan->getAll();
            $data['user'] = $this->db->get_where('user', ['name' => $this->session->userdata('name')])->row_array();
            $data['d'] = $jabatan->getByID($id)->row();
            $data['judul'] = 'BPR Unisritama - Administrator';
            $this->load->view('template/admin_header', $data);
            $this->load->view('admin/edit_jab', $data);
            $this->load->view('template/admin_footer');
        }
    }

    public function delete($id)
    {
        $this->jabatan->delete($id);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Berhasil hapus Jabatan!</div>');
        redirect('admin/jabatan', 'refresh');
    }
}

/* End of file Controllername.php */
