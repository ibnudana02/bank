<?php

defined('BASEPATH') or exit('No direct script access allowed');


defined('BASEPATH') or exit('No direct script access allowed');

class Bunga extends CI_Controller
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
        $this->load->model(array('Produk_model' => 'produk'));
    }

    public function index()
    {
        $data['title'] = 'Suku Bunga Produk';
        $data['heading'] = 'Dashboard';
        $data['user'] = $this->db->get_where('user', ['name' => $this->session->userdata('name')])->row_array();
        $data['data'] = $this->produk->getBunga();
        $data['jenis'] = $this->db->get_enum('bunga', 'jenis');
        // print_r($data['jenis']);
        // die;
        $data['judul'] = 'BPR Unisritama - Administrator';
        $this->load->view('template/admin_header', $data);
        $this->load->view('admin/suku_bunga');
        $this->load->view('template/admin_footer');
    }

    public function add()
    {
        $this->form_validation->set_rules('produk', 'Produk', 'required|trim');
        $this->form_validation->set_rules('jenis', 'Jenis Produk', 'required|trim');
        $this->form_validation->set_rules('persen', 'Persentase Suku Bunga', 'required|trim');

        if ($this->form_validation->run()) { //jika form_validation berhasil dijalankan, fungsi save() atau simpan data dijalankan
            $this->produk->simpan_sb();
            $this->session->set_flashdata('message', 'Berhasil disimpan');
            redirect('admin/suku_bunga', 'refresh');
        }
        $data['title'] = 'Suku Bunga Produk';
        $data['heading'] = 'Dashboard';
        $data['user'] = $this->db->get_where('user', ['name' => $this->session->userdata('name')])->row_array();
        $data['data'] = $this->produk->getBunga();
        $data['jenis'] = $this->db->get_enum('bunga', 'jenis');
        print_r($data['jenis']);
        die;
        $data['judul'] = 'BPR Unisritama - Administrator';
        $this->load->view('template/admin_header', $data);
        $this->load->view('admin/suku_bunga', $data);
        $this->load->view('template/admin_footer');
    }
}

/* End of file Bunga.php */
