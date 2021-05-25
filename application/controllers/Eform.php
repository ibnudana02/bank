<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Eform extends CI_Controller
{


    public function __construct()
    {
        parent::__construct();
        $this->load->model(array(
            'Kategori_model' => 'kategori', 'Berita_model' => 'berita',
            'Produk_model' => 'produk', 'Jenis_model' => 'jenis',
            'User_model' => 'user', 'Nasabah_model' => 'nsb'
        ));
        $this->data = array(
            'tabungan' => $this->produk->getTab()->result(),
            'deposito' => $this->produk->getDep()->result(),
            'kredit' => $this->produk->getKrd()->result(),
            'layanan' => $this->produk->getLayanan()->result(),
            'berita' => $this->berita->getLima(),

        );
    }


    public function index()
    {
        $data['judul'] = 'e-Form - Bank Unisritama';
        $data['tos'] = '<strong>Please read and accept our terms and conditions.</strong>';
        $this->form_validation->set_rules('ketentuan', 'Syarat & Ketentuan', 'trim|required');
        // print_r($data);
        // die;
        if ($this->form_validation->run() === TRUE) {
            if (!$this->input->post('ketentuan')) {
                // $this->session->set_flashdata('message', '<strong>Please read and accept our terms and conditions.</strong>');
                $this->load->view('template/header_eform', $data);
                $this->load->view('produk/syaratKetentuan', $data);
                $this->load->view('template/footer_eform');
            } else {
                redirect('jenisRekening', 'refresh');
            }
        } else {
            $this->load->view('template/header_eform', $data);
            $this->load->view('produk/syaratKetentuan');
            $this->load->view('template/footer_eform');
        }
    }

    public function jenisRekening()
    {
        $data['judul'] = 'e-Form - Bank Unisritama';
        $data['jenis'] = $this->produk->getTab()->result();
        $this->form_validation->set_rules('jenis', 'Jenis Rekening', 'trim|required');
        if ($this->form_validation->run() === TRUE) {
            if (!$this->input->post('jenis')) {
                // $this->session->set_flashdata('message', '<strong>Please read and accept our terms and conditions.</strong>');
                $this->load->view('template/header_eform', $data);
                $this->load->view('produk/jenisRekening');
                $this->load->view('template/footer_eform');
            } else {
                redirect('dataDiri', 'refresh');
            }
        } else {
            // $this->session->set_flashdata('message', '<strong>Please read and accept our terms and conditions.</strong>');
            $this->load->view('template/header_eform', $data);
            $this->load->view('produk/jenisRekening');
            $this->load->view('template/footer_eform');
        }
    }

    public function statusNasabah()
    {
        $data['judul'] = 'e-Form - Bank Unisritama';
        // $this->session->set_flashdata('message', '<strong>Next.</strong>');
        $this->load->view('template/header_eform', $data);
        $this->load->view('produk/statusNasabah');
        $this->load->view('template/footer_eform');
    }
}

/* End of file Eform.php */
