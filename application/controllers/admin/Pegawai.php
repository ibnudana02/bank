<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Pegawai extends CI_Controller
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
        $this->load->model(array('Pegawai_model' => 'pegawai', 'Jabatan_model' => 'jabatan'));
    }

    public function index()
    {
        $data['title'] = 'Data Pegawai';
        $data['heading'] = 'Dashboard';
        $data['user'] = $this->db->get_where('user', ['name' => $this->session->userdata('name')])->row_array();
        $data['data'] = $this->pegawai->getAll()->result();
        $data['judul'] = 'BPR Unisritama - Administrator';
        $this->load->view('template/admin_header', $data);
        $this->load->view('admin/pegawai');
        $this->load->view('template/admin_footer');
    }

    public function tambahPegawai()
    {
        $this->form_validation->set_rules('nama', 'Nama Pegawai', 'trim|required');
        $this->form_validation->set_rules('jabatan', 'Jabatan', 'trim|required');

        $pegawai = $this->pegawai;
        if ($this->form_validation->run()) {
            $pegawai->save();
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Berhasil tambah Data Pegawai!</div>');
            redirect('admin/pegawai', 'refresh');
        } else {
            $data['title'] = 'Administrator - Data Pegawai';
            $data['heading'] = 'Dashboard';
            $data['user'] = $this->db->get_where('user', ['name' => $this->session->userdata('name')])->row_array();
            $data['judul'] = 'BPR Unisritama - Administrator';
            $data['jabatan'] = $this->jabatan->getAll();
            $this->load->view('template/admin_header', $data);
            $this->load->view('admin/tambahPegawai');
            $this->load->view('template/admin_footer');
        }
    }

    public function edit($id)
    {
        if (!isset($id)) redirect('admin/pegawai');
        $this->form_validation->set_rules('judul', 'Judul', 'required|trim');
        $this->form_validation->set_rules('kategori', 'Kategori', 'required|trim');
        $this->form_validation->set_rules('isi', 'Isi', 'required|trim');

        if ($this->form_validation->run()) {
            $this->pegawai->edit();
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Perubahan berhasil disimpan!</div>');
            redirect('admin/pegawai', 'refresh');
        } else {
            $data['title'] = 'Edit Pegawai';
            $data['heading'] = 'Edit Pegawai';
            $data['jabatan'] = $this->jabatan->getAll();
            $data['data'] = $this->pegawai->getById($id);
            if (!$data['data']) show_404();
            $data['user'] = $this->db->get_where('user', ['name' => $this->session->userdata('name')])->row_array();
            $this->load->view('template/admin_header', $data);
            $this->load->view('admin/editPeg', $data);
            $this->load->view('template/admin_footer');
        }
        // echo "test edit pegawai page " . $data['data'];
    }

    public function delete($id)
    {
        echo "test delete pegawai page " . $id;
        if (!isset($id)) show_404(); //jika tidak ada $id yang dipilih, tampilkan error page
        if ($this->pegawai->delete($id)) { //jika $id terpilih, lakukan hapus data 
            $this->session->set_flashdata( //tambahkan pesan jika berhasil
                'message',
                '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                Hapus Data Pegawai <strong>Berhasil!</strong>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span></button></div>'
            );
            redirect(site_url('admin/pegawai')); //arahkan ke halaman list
        }
    }
}

/* End of file Pegawai.php */
