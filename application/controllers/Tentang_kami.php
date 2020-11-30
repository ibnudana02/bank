<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Tentang_kami extends CI_Controller
{
    var $data;

    public function __construct()
    {
        parent::__construct();
        $this->load->model(array(
            'Pegawai_model' => 'pegawai', 'Awards_model' => 'awards',
            'Tentang_model' => 'kantor', 'Produk_model' => 'produk'
        ));
        $this->data = array(
            'tabungan' => $this->produk->getTab()->result(),
            'deposito' => $this->produk->getDep()->result(),
            'kredit' => $this->produk->getKrd()->result(),
        );
    }


    public function index()
    {
        $data = $this->data;
        $data['judul'] = 'Profil Perusahaan | Bank Unisritama';
        $this->load->view('template/header', $data);
        $this->load->view('tentang/profil');
        $this->load->view('template/footer');
    }

    public function sejarah()
    {
        $data = $this->data;
        $data['judul'] = 'Sejarah Pendirian | Bank Unisritama';
        $this->load->view('template/header', $data);
        $this->load->view('tentang/sejarah');
        $this->load->view('template/footer');
    }

    public function visi_misi()
    {
        $data = $this->data;
        $data['judul'] = 'Visi dan Misi | Bank Unisritama';
        $this->load->view('template/header', $data);
        $this->load->view('tentang/visi_misi');
        $this->load->view('template/footer');
    }

    public function manajemen()
    {
        $data = $this->data;
        $data['judul'] = 'Board Manajemen | Bank Unisritama';
        $data['pegawai'] = $this->pegawai->getMan()->result();
        $this->load->view('template/header', $data);
        $this->load->view('tentang/board', $data);
        $this->load->view('template/footer');
    }

    public function awards()
    {
        $data = $this->data;
        $data['judul'] = 'Penghargaan | Bank Unisritama';
        $data['data'] = $this->awards->getAll()->result();
        $this->load->view('template/header', $data);
        $this->load->view('tentang/awards');
        $this->load->view('template/footer');
    }

    public function contact()
    {
        $data = $this->data;
        $data['judul'] = 'Hubungi Kami | Bank Unisritama';
        $data['data'] = $this->kantor->get_kantor()->result();
        $data['captcha'] = $this->recaptcha->getWidget();
        $data['script_captcha'] = $this->recaptcha->getScriptTag();
        $recaptcha = $this->input->post('g-recaptcha-response');
        $response = $this->recaptcha->verifyResponse($recaptcha);
        $this->load->view('template/new_header', FALSE);
        $this->load->view('tentang/contact', FALSE);
        $this->load->view('template/new_footer', FALSE);
    }

    public function struktur()
    {
        $data = $this->data;
        $data['judul'] = 'Struktur Organisasi | Bank Unisritama';
        $data['data'] = $this->pegawai->getAll()->result();
        $d = $this->pegawai->getAll();
        $this->load->view('template/header', $data);
        $this->load->view('tentang/struktur');
        $this->load->view('template/footer');
    }

    public function location()
    {
        $data = $this->data;
        $data['judul'] = 'Lokasi | Bank Unisritama';
        $this->load->view('template/header', $data);
        $this->load->view('tentang/location');
        $this->load->view('template/footer');
    }
}
