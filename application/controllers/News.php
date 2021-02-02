<?php

defined('BASEPATH') or exit('No direct script access allowed');

class News extends CI_Controller
{
    var $data;

    public function __construct()
    {
        parent::__construct();
        $this->load->model(array(
            'Kategori_model' => 'kategori', 'Berita_model' => 'berita', 'Produk_model' => 'produk',
            'Laporan_model' => 'laporan'
        ));
        $this->data = array(
            'tabungan' => $this->produk->getTab()->result(),
            'deposito' => $this->produk->getDep()->result(),
            'kredit' => $this->produk->getKrd()->result(),
            'layanan' => $this->produk->getLayanan()->result(),
        );
    }


    public function pengkinian_data()
    {
        $data = $this->data;
        $data['judul'] = 'Pengkinian Nasabah';
        $data['berita'] = $this->berita->getLima(); //Ambil data berita
        $this->load->view('template/new_header', $data);
        $this->load->view('news/new_pengkinian', $data);
        $this->load->view('template/new_footer');
    }

    public function berita()
    {
        $data = $this->data;
        $data['judul'] = 'Berita Terbaru | Bank Unisritama';
        $data['berita'] = $this->berita->getAll()->result();
        $this->load->view('template/new_header', $data);
        $this->load->view('news/new_berita', $data);
        $this->load->view('template/new_footer');
    }

    public function detailBerita($slug)
    {
        $data = $this->data;
        $detail = $this->berita->getBySlug($slug);
        $row = $this->berita->getBySlug($slug)->row();
        $data['berita'] = $this->berita->getLima(); //Ambil data berita
        $data['row'] = $row;
        if ($detail->num_rows() > 0) {
            $data['judul'] = ucwords($row->judul) . ' | Bank Unisritama';
            $this->load->view('template/new_header', $data);
            $this->load->view('news/new_detail', $data);
            $this->load->view('template/new_footer');
        } else {
            // redirect('custom404', 'refresh');
            $data['judul'] = 'Not Found';
            $this->load->view('template/new_header', $data);
            $this->load->view('template/error');
            $this->load->view('template/new_footer');
        }
    }

    public function kategoriBerita($kategori)
    {
        $data = $this->data;
        $row = $this->berita->getKategori($kategori);
        $data['judul'] = 'Berita Terbaru | Bank Unisritama';
        $data['berita'] = $row;
        $this->load->view('template/header', $data);
        $this->load->view('news/berita', $data);
        $this->load->view('template/footer');
    }

    public function gcg()
    {
        $data = $this->data;
        $data['judul'] = 'Laporan Tata Kelola | Bank Unisritama';
        $data['data'] = $this->laporan->getGcg()->result();
        $this->load->view('template/new_header', $data);
        $this->load->view('news/new_gcg', $data);
        $this->load->view('template/new_footer');
    }
    public function publikasi()
    {
        $data = $this->data;
        $data['judul'] = 'Laporan Publikasi | Bank Unisritama';
        $data['data'] = $this->laporan->getPub()->result();
        $this->load->view('template/new_header', $data);
        $this->load->view('news/new_gcg', $data);
        $this->load->view('template/new_footer');
    }

    public function unduh($id_laporan)
    {
        $d = $this->laporan->getById($id_laporan);
        $file = $d->dokumen;
        $data = file_get_contents("upload/laporan/" . $file);
        force_download(ucwords($d->laporan) . '.pdf', $data);
    }
}

/* End of file News.php */
