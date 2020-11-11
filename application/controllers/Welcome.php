<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Welcome extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model(array('Layanan_model' => 'layanan', 'Slider_model' => 'slider', 'Berita_model' => 'berita', 'Produk_model' => 'produk', 'User_model' => 'user'));
	}


	public function index()
	{
		$data['judul'] = 'BPR Unisritama - Mitra Ekonomi Kerakyatan';
		$data['data'] = $this->layanan->getAll()->result();
		$data['slider'] = $this->slider->getAll()->result();
		$data['berita'] = $this->berita->getAll()->result();
		$this->load->view('template/header', $data);
		$this->load->view('template/slider', $data);
		$this->load->view('home');
		$this->load->view('template/footer');
	}

	public function test()
	{
		$data['judul'] = 'BPR Unisritama - Mitra Ekonomi Kerakyatan';
		$this->load->view('template/header', $data);
		// $this->load->view('produk/tabungan', $data);
		$this->load->view('unik');
		$this->load->view('template/footer');
	}

	public function getDati()
	{
		$id = $this->input->post('id');
		$data = $this->input->post('data');


		// $n = strlen($id);
		// $m = ($n == 2 ? 5 : ($n == 5 ? 8 : 13));
		// die;

		if ($data == "kabupaten") {
			$daerah = $this->user->viewKab($id);
			// var_dump($daerah);
			$lists = "<option value=''>Pilih</option>";
			foreach ($daerah as $data) {
				$lists .= "<option value='" . $data->id_kab . "' " . set_select('kab_identitas', $data->id_kab) . ">";
				$lists .= $data->nama . "</option>";
			}
			$callback = array('list_kota' => $lists); // Masukan variabel lists tadi ke dalam array $callback dengan index array : list_kota
			echo json_encode($callback);
		} elseif ($data == "kecamatan") {
			$daerah = $this->user->viewKec($id);
			$lists = "<option value=''>Pilih</option>";
			foreach ($daerah as $data) {
				$lists .= "<option value='" . $data->id_kec . "'>";
				$lists .= $data->nama . "</option>";
			}
			$callback = array('list_kota' => $lists); // Masukan variabel lists tadi ke dalam array $callback dengan index array : list_kota
			echo json_encode($callback);
		} elseif ($data = "desa") {
			$daerah = $this->user->viewDesa($id);
			$lists = "<option value=''>Pilih</option>";
			foreach ($daerah as $data) {
				$lists .= "<option value='" . $data->id_kel . "'>";
				$lists .= $data->nama . "</option>";
			}
			$callback = array('list_kota' => $lists); // Masukan variabel lists tadi ke dalam array $callback dengan index array : list_kota
			echo json_encode($callback);
		}
	}
}
