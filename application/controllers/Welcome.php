<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Welcome extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model(array(
			'Layanan_model' => 'layanan', 'Slider_model' => 'slider',
			'Berita_model' => 'berita', 'Produk_model' => 'produk', 'User_model' => 'user'
		));
		$this->data = array(
			'tabungan' => $this->produk->getTab()->result(),
			'deposito' => $this->produk->getDep()->result(),
			'kredit' => $this->produk->getKrd()->result(),
			'layanan' => $this->produk->getLayanan()->result(),
		);
	}

	public function index()
	{
		$data = $this->data;
		$data['judul'] = 'BPR Unisritama - Mitra Ekonomi Kerakyatan';
		$data['slider'] = $this->slider->getAll()->result();
		$data['berita'] = $this->berita->getAll()->result();
		// print_r($data['berita']);
		// die;
		$this->load->view('template/new_header', $data, FALSE);
		$this->load->view('template/new_slider', $data, FALSE);
		$this->load->view('new', $data, FALSE);
		$this->load->view('template/new_footer', FALSE);
	}

	public function old()
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

	public function tes1()
	{
		# code...
		$this->load->view('sse');
	}

	public function tes()
	{
		$this->load->dbutil();

		$prefs = array(
			'format'      => 'zip',
			'filename'    => 'my_db_backup.sql'
		);


		$backup = &$this->dbutil->backup($prefs);

		$db_name = 'backup-on-' . date("Y-m-d") . '.zip';
		$save = 'database/' . $db_name;

		$this->load->helper('file');
		write_file($save, $backup);


		$this->load->helper('download');
		force_download($db_name, $backup);
	}
}
