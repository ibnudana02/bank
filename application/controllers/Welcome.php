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
		$data['tabungan'] = $this->produk->getTab()->result();
		$data['deposito'] = $this->produk->getDep()->result();
		$data['kredit'] = $this->produk->getKrd()->result();
		$this->load->view('template/header', $data);
		$this->load->view('template/slider', $data);
		$this->load->view('home');
		$this->load->view('template/footer');
	}

	public function test()
	{
		$data['judul'] = 'BPR Unisritama - Mitra Ekonomi Kerakyatan';
		$this->load->view('template/header', $data);
		$this->load->view('unik');
		$this->load->view('template/footer');
	}

	public function getDati()
	{
		$id = $this->input->post('id');
		$data = $this->input->post('data');

		if ($data == "kabupaten") {
			$daerah = $this->user->viewKab($id);
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

	public function getJenis()
	{
		$data = $this->input->post('data');
		// echo $data;
		// die;
		if ($data == "Simpanan") {
			$jenis = $this->user->getSimpanan();
			$lists = "<option value='' selected='true' disabled='disabled'>Pilih Jenis Produk Tabungan</option>";
			foreach ($jenis as $data) {
				$lists .= "<option value='" . $data->id_produk . "' >";
				$lists .= ucwords($data->produk) . "</option>";
			}
			$callback = array('list_jenis' => $lists);
			echo json_encode($callback);
		} else {
			$jenis = $this->user->getUmum();
			$lists = "<option value='' selected='true' disabled='disabled'>Pilih Jenis Produk Tabungan</option>";
			foreach ($jenis as $data) {
				$lists .= "<option value='" . $data->id_produk . "' >";
				$lists .= ucwords($data->produk) . "</option>";
			}
			$callback = array('list_jenis' => $lists);
			echo json_encode($callback);
		}
	}

	public function imageUpload()
	{
		// echo 'page upload ckeditor';
		if (isset($_FILES['upload']['name'])) {
			$file = $_FILES['upload']['tmp_name'];
			$file_name = $_FILES['upload']['name'];
			$file_name_array = explode(".", $file_name);
			$extension = end($file_name_array);
			$new_image_name = rand() . '.' . $extension;
			chmod('upload', 0777);
			$allowed_extension = array("jpg", "jpeg", "png");
			if (in_array($extension, $allowed_extension)) {
				move_uploaded_file($file, 'upload/' . $new_image_name);
				$function_number = $_GET['CKEditorFuncNum'];
				$url = 'upload/' . $new_image_name;
				$message = '';
				echo "<script type='text/javascript'>window.parent.CKEDITOR.tools.callFunction($function_number, '$url', '$message');</script>";
			}
		}
	}
}
