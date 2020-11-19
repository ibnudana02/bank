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
        );
    }


    public function pengkinian_data()
    {
        $data = $this->data;
        $data['judul'] = 'Pengkinian Nasabah';
        $data['category'] = $this->kategori->getAll(); //Ambil data kategori
        $data['berita'] = $this->berita->getLima(); //Ambil data berita
        $this->load->view('template/header', $data);
        $this->load->view('news/pengkinian_data', $data);
        $this->load->view('template/footer');
    }

    public function berita()
    {
        $data = $this->data;
        $data['judul'] = 'Berita Terbaru | Bank Unisritama';
        $data['berita'] = $this->berita->getAll();
        $this->load->view('template/header', $data);
        $this->load->view('news/berita', $data);
        $this->load->view('template/footer');
    }

    public function detailBerita($slug)
    {
        $data = $this->data;
        $row = $this->berita->getBySlug($slug);
        $data['judul'] = ucwords($row->judul) . ' | Bank Unisritama';
        $data['category'] = $this->kategori->getAll(); //Ambil data kategori
        $data['berita'] = $this->berita->getLima(); //Ambil data berita
        $data['row'] = $row;
        $this->load->view('template/header', $data);
        $this->load->view('news/detailBerita', $data);
        $this->load->view('template/footer');
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
        $this->load->view('template/header', $data);
        $this->load->view('news/gcg', $data);
        $this->load->view('template/footer');
    }
    public function publikasi()
    {
        $data = $this->data;
        $data['judul'] = 'Laporan Publikasi | Bank Unisritama';
        $data['data'] = $this->laporan->getPub()->result();
        $this->load->view('template/header', $data);
        $this->load->view('news/gcg', $data);
        $this->load->view('template/footer');
    }

    public function unduh($id_laporan)
    {
        $d = $this->laporan->getById($id_laporan);
        $file = $d->dokumen;
        $data = file_get_contents("upload/laporan/" . $file);
        force_download($file, $data);
    }
}

/* End of file News.php */
