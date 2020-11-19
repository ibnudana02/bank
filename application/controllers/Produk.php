<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Produk extends CI_Controller
{
    var $data = array();

    public function __construct()
    {
        parent::__construct();
        $this->load->library('email');

        $this->load->model(array(
            'Kategori_model' => 'kategori', 'Berita_model' => 'berita',
            'Produk_model' => 'produk', 'Jenis_model' => 'jenis',
            'User_model' => 'user', 'Nasabah_model' => 'nsb'
        ));
        $this->data = array(
            'tabungan' => $this->produk->getTab()->result(),
            'deposito' => $this->produk->getDep()->result(),
            'kredit' => $this->produk->getKrd()->result(),
        );
    }

    public function index()
    {
        $this->load->view('template/header');
        $this->load->view('template/footer');
    }

    public function pmb()
    {
        $data = $this->data;
        $data['judul'] = 'Pembayaran Mahasiswa | Bank Unisritama';
        $data['category'] = $this->kategori->getAll(); //Ambil data kategori
        $data['berita'] = $this->berita->getLima(); //Ambil data berita
        $data['row'] =  $this->produk->getPmb(); //Ambil data berita
        $this->load->view('template/header', $data); //passing data to header view
        $this->load->view('produk/pmb', $data); //passing data to content view
        $this->load->view('template/footer');
    }

    public function ppob()
    {
        $data['judul'] = 'Payment Point Online Bank | Bank Unisritama';
        $data['category'] = $this->kategori->getAll(); //Ambil data kategori
        $data['berita'] = $this->berita->getLima(); //Ambil data berita
        $data['row'] =  $this->produk->getPayment(); //Ambil data berita
        $data = $this->data;
        $this->load->view('template/header', $data);
        $this->load->view('produk/pmb', $data);
        $this->load->view('template/footer');
    }

    public function deposito()
    {
        $data = $this->data;
        $data['judul'] = 'Deposito | Bank Unisritama';
        $data['bread'] = 'Home';
        $data['crumb'] = 'Deposito';
        $data['data'] = $this->produk->getDep()->result();
        $this->load->view('template/header', $data);
        $this->load->view('produk/produk', $data);
        $this->load->view('template/footer');
    }

    public function tabungan()
    {
        $data = $this->data;
        $data['judul'] = 'Tabungan | Bank Unisritama';
        $data['bread'] = 'Home';
        $data['crumb'] = 'Tabungan';
        $data['data'] = $this->produk->getTab()->result();
        $this->load->view('template/header', $data);
        $this->load->view('produk/produk', $data);
        $this->load->view('template/footer');
    }

    public function kredit()
    {
        $data = $this->data;
        $data['judul'] = 'Kredit | Bank Unisritama';
        $data['bread'] = 'Home';
        $data['crumb'] = 'Kredit';
        $data['data'] = $this->produk->getKrd()->result();
        $this->load->view('template/header', $data);
        $this->load->view('produk/produk', $data);
        $this->load->view('template/footer');
    }

    public function dana()
    {
        $data = $this->data;
        $data['judul'] = 'Produk Dana | Bank Unisritama';
        $data['bread'] = 'Home';
        $data['crumb'] = 'Produk Dana';
        $data['data'] = $this->produk->getDana()->result();
        $this->load->view('template/header', $data);
        $this->load->view('produk/produk', $data);
        $this->load->view('template/footer');
    }

    public function produk()
    {
        $data = $this->data;
        $data['judul'] = 'Produk | Bank Unisritama';
        $data['bread'] = 'Home';
        $data['crumb'] = 'Produk';
        $data['data'] = $this->produk->getAll();
        $this->load->view('template/header', $data);
        $this->load->view('produk/produk', $data);
        $this->load->view('template/footer');
    }

    public function detailProduk($slug)
    {
        // $row = $this->produk->getById($id);
        $data = $this->data;
        $row = $this->produk->getBySlug($slug);
        $data['judul'] = ucwords($row->produk) . ' | Bank Unisritama';
        $data['dps'] = $this->produk->getDep()->result();
        $data['tab'] = $this->produk->getTab()->result();
        $data['krd'] = $this->produk->getKrd()->result();
        $data['berita'] = $this->berita->getLima();
        $data['row'] = $row;
        $this->load->view('template/header', $data);
        $this->load->view('produk/detailProduk', $data);
        $this->load->view('template/footer');
    }

    public function createTab()
    {
        $this->form_validation->set_rules('nm_lengkap', 'Nama Lengkap', 'required|trim', ['required' => 'Nama Lengkap harus diisi!']);
        $this->form_validation->set_rules('nm_identitas', 'Nama Identitas', 'required|trim', ['required' => 'Nama Identitas harus diisi!']);
        $this->form_validation->set_rules('jenis_kelamin', 'Jenis Kelamin', 'required|trim', ['required' => 'Jenis Kelamin harus diisi!']);
        $this->form_validation->set_rules('agama', 'Agama', 'required|trim', ['required' => 'Agama harus diisi!']);
        $this->form_validation->set_rules('warga_negara', 'Kewarganegaraan', 'required|trim', ['required' => 'Kewarganegaan harus diisi!']);
        $this->form_validation->set_rules('jenis_identitas', 'Jenis Identitas', 'required|trim', ['required' => 'Jenis Identitas harus diisi!']);
        $this->form_validation->set_rules('masa_berlaku', 'Masa Berlaku', 'required|trim', ['required' => 'Masa Berlaku harus diisi!']);
        $this->form_validation->set_rules('no_identitas', 'Nomor Tanda Pengenal', 'required|trim|alpha_numeric', ['required' => 'No Identitas harus diisi!']);
        $this->form_validation->set_rules('tempat_lahir', 'Tempat lahir', 'required|trim', ['required' => 'Tempat Lahir harus diisi!']);
        $this->form_validation->set_rules('tgl_lahir', 'Tanggal Lahir', 'required|trim', ['required' => 'Tanggal Lahir harus diisi!']);
        $this->form_validation->set_rules('no_hp', 'No. HP', 'required|trim', ['required' => 'No. HP harus diisi!']);
        $this->form_validation->set_rules('provinsi_identitas', 'Provinsi Identitas', 'required|trim', ['required' => 'Provinsi Identitas harus diisi!']);
        $this->form_validation->set_rules('kab_identitas', 'Kabupaten/Kota Identitas', 'required|trim', ['required' => 'Kota Identitas harus diisi!']);
        $this->form_validation->set_rules('kec_identitas', 'Kecamatan Identitas', 'required|trim', ['required' => 'Kecamatan Identitas harus diisi!']);
        $this->form_validation->set_rules('kel_identitas', 'Desa/Kelurahan Identitas', 'required|trim', ['required' => 'Desa Identitas harus diisi!']);
        $this->form_validation->set_rules('alamat_identitas', 'Alamat sesuai Identitas', 'required|trim', ['required' => 'Alamat sesuai Identitas harus diisi!']);
        $this->form_validation->set_rules('pos_identitas', 'Kode Pos Identitas', 'trim');
        $this->form_validation->set_rules('prov_domisili', 'Provinsi Domisili', 'required|trim', ['required' => 'Provinsi Domisili harus diisi!']);
        $this->form_validation->set_rules('kab_domisili', 'Kabupaten/Kota Domisili', 'required|trim', ['required' => 'Kota Domisili harus diisi!']);
        $this->form_validation->set_rules('kec_domisili', 'Kecamatan Domisili', 'required|trim', ['required' => 'Kecamatan Domisili harus diisi!']);
        $this->form_validation->set_rules('kel_domisili', 'Desa/Kelurahan Domisili', 'required|trim', ['required' => 'Desa Domisili harus diisi!']);
        $this->form_validation->set_rules('alamat_domisili', 'Alamat sesuai Domisili', 'required|trim', ['required' => 'Alamat Domisili harus diisi!']);
        $this->form_validation->set_rules('pos_domisili', 'Kode Pos Domisili', 'trim');
        $this->form_validation->set_rules('nm_ayah', 'Nama Ayah', 'required|trim', ['required' => 'Nama Ayah harus diisi!']);
        $this->form_validation->set_rules('nm_ibu', 'Nama Ibu', 'required|trim', ['required' => 'Nama Gadis Ibu Kandung harus diisi!']);
        $this->form_validation->set_rules('nm_ahli_waris', 'Nama Ahli Waris', 'required|trim', ['required' => 'Nama Ahli Waris harus diisi!']);
        $this->form_validation->set_rules('hb_ahli_waris', 'Hub dg Ahli Waris', 'required|trim', ['required' => 'Hubungan dg Ahli Waris harus diisi!']);
        $this->form_validation->set_rules('alamat_ahli_waris', 'Alamat Ahli Waris', 'required|trim', ['required' => 'Alamat Ahli Waris harus diisi!']);
        $this->form_validation->set_rules('no_ahli_waris', 'No. Hp Ahli Waris', 'required|trim', ['required' => 'No. Hp Ahli Waris harus diisi!']);
        $this->form_validation->set_rules('status_menikah', 'Status Pernikahan', 'trim');
        $this->form_validation->set_rules('nm_pasangan', 'Nama Pasangan', 'trim');
        $this->form_validation->set_rules('tmp_lhr_pasangan', 'Tempat Lahir Pasangan', 'trim');
        $this->form_validation->set_rules('tgl_lhr_pasangan', 'Tanggal Lahir Pasangan', 'trim');
        $this->form_validation->set_rules('identitas_pasangan', 'Identitas Pasangan', 'trim');
        $this->form_validation->set_rules('no_identitas_pasangan', 'No. Identitas Pasangan', 'trim');
        $this->form_validation->set_rules('alamat_pasangan', 'Alamat Pasangan', 'trim');
        $this->form_validation->set_rules('no_pasangan', 'No. HP Pasangan', 'trim|alpha_numeric');
        $this->form_validation->set_rules('profesi', 'Profesi', 'required|trim', ['required' => 'Profesi harus diisi!']);
        $this->form_validation->set_rules('jenis_pekerjaan', 'Jenis Pekerjaan', 'required|trim', ['required' => 'Jenis Pekerjaan harus diisi!']);
        $this->form_validation->set_rules('status_pekerjaan', 'Status Pekerjaan', 'required|trim', ['required' => 'Status Pekerjaan harus diisi!']);
        $this->form_validation->set_rules('sumber_dana', 'Sumber Penghasilan', 'required|trim', ['required' => 'Sumber Penghasilan harus diisi!']);
        $this->form_validation->set_rules('jabatan', 'Jabatan', 'trim');
        $this->form_validation->set_rules('gaji_bln', 'Gaji per Bulan', 'trim|alpha_numeric');
        $this->form_validation->set_rules('perusahaan', 'Nama Perusahaan / Usaha', 'trim');
        $this->form_validation->set_rules('alamat_kantor', 'Alamat Perusahaan/Usaha', 'trim');
        $this->form_validation->set_rules('telp_kantor', 'Telp Kantor', 'trim|alpha_numeric');
        $this->form_validation->set_rules('email_kantor', 'Email Perusahaan', 'trim|valid_email');
        $this->form_validation->set_rules('status_rumah', 'Status Tempat Tinggal', 'required|trim', ['required' => 'status_rumah harus diisi!']);
        $this->form_validation->set_rules('tanggungan', 'Tanggungan', 'required|trim', ['required' => 'Jumlah Tanggungan harus diisi!']);
        $this->form_validation->set_rules('tujuan_buka', 'Tujuan Pembukaan', 'required|trim', ['required' => 'Tujuan Pembukaan Rek harus diisi!']);
        $this->form_validation->set_rules('jenis_tab', 'Jenis Tabungan', 'required|trim', ['required' => 'Jenis Tabungan harus diisi!']);
        $this->form_validation->set_rules('pendidikan', 'Pendidikan Terakhir', 'required|trim', ['required' => 'Pendidikan Terakhir harus diisi!']);
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email', ['required' => 'Email harus diisi!']);
        $this->form_validation->set_rules('npwp', 'NPWP', 'trim');
        $this->form_validation->set_rules('ft_identitas', 'Foto Kartu Tanda Pengenal', 'trim');
        $this->form_validation->set_rules('ft_kk', 'Foto Kartu Keluarga', 'trim');
        $this->form_validation->set_rules('ft_diri', 'Foto Selfie', 'trim');
        $this->form_validation->set_rules('ft_ttd', 'Foto Tanda Tangan', 'trim');
        $this->form_validation->set_rules('ft_npwp', 'Foto NPWP', 'trim');

        $data = $this->data;
        $data['agama'] = $this->db->get_enum('nasabah_tab', 'agama');
        $data['tujuan_buka'] = $this->db->get_enum('nasabah_tab', 'tujuan_buka');
        $data['status_rumah'] = $this->db->get_enum('nasabah_tab', 'status_rumah');
        $data['pendidikan'] = $this->db->get_enum('nasabah_tab', 'pendidikan');
        $data['aw'] = $this->db->get_enum('nasabah_tab', 'hb_ahli_waris');
        $data['status'] = $this->db->get_enum('nasabah_tab', 'status_menikah');
        $data['profesi'] = $this->db->get_enum('nasabah_tab', 'profesi');
        $data['jenis_pekerjaan'] = $this->db->get_enum('nasabah_tab', 'jenis_pekerjaan');
        $data['status_pekerjaan'] = $this->db->get_enum('nasabah_tab', 'status_pekerjaan');
        $data['sumber_dana'] = $this->db->get_enum('nasabah_tab', 'sumber_dana');
        $data['wn'] = $this->db->get_enum('nasabah_tab', 'warga_negara');
        $data['identitas'] = $this->db->get_enum('nasabah_tab', 'jenis_identitas');
        $data['jk'] = $this->db->get_enum('nasabah_tab', 'jenis_kelamin');
        $data['bread'] = 'Home';
        $data['crumb'] = 'Produk';
        $data['jenis'] = $this->produk->getTab()->result();
        $data['prop'] = $this->user->getProv();
        $data['judul'] = 'e-Form Rekening Tabungan - Bank Unisritama';

        if ($this->form_validation->run() == true) {
            $this->nsb->createNsb();
            $this->load->view('template/header', $data);
            $this->load->view('produk/bukaRek', $data);
            $this->load->view('template/footer');
        } else {
            $this->load->view('template/header', $data);
            $this->load->view('produk/bukaRek', $data);
            $this->load->view('template/footer');
        }
    }

    public function createDps()
    {
        $data = $this->data;
        $data['judul'] = 'Pembukaan Rekening Deposito | Bank Unisritama';
        $data['bread'] = 'Home';
        $data['crumb'] = 'Produk';
        $data['jenis'] = $this->produk->getDep()->result();
        $data['prop'] = $this->user->getProv();
        // $data['kab'] = $this->user->viewByProvinsi();
        $this->load->view('template/header', $data);
        $this->load->view('produk/bukaDps', $data);
        $this->load->view('template/footer');
    }
    public function createKrd()
    {
        $data['judul'] = 'Pengajuan Kredit | Bank Unisritama';
        $data['bread'] = 'Home';
        $data['crumb'] = 'Produk';
        $data['jenis'] = $this->produk->getDep()->result();
        $data['prop'] = $this->user->getProv();
        $data = $this->data;
        $this->load->view('template/header', $data);
        $this->load->view('produk/bukaKrd', $data);
        $this->load->view('template/footer');
    }

    public function send()
    {
        if ($this->sendMail()) {
            $this->session->set_flashdata('message', '<strong>Congratulation!</strong> Data anda telah disimpan. Mohon tunggu verifikasi dari pihak Bank Unisritama.');
            redirect('pembukaan-rekening-tabungan', 'refresh');
        } else {
            $this->session->set_flashdata('message', '<strong>Terdapat masalah pada sambungan. Coba lagi!</strong>.');
            redirect('pembukaan-rekening-tabungan', 'refresh');
        }
    }

    public function sendMail()
    {
        // configure the email setting  
        $config['protocol'] = 'smtp';
        $config['smtp_host'] = 'ssl://smtp.gmail.com'; //smtp host name  
        $config['smtp_port'] = '465'; //smtp port number  
        $config['smtp_user'] = 'unisritamabpr@gmail.com';
        $config['smtp_pass'] = 'Admin-web10'; //$from_email password  
        $config['mailtype'] = 'html';
        $config['charset'] = 'iso-8859-1';
        $config['wordwrap'] = TRUE;
        $config['newline'] = "\r\n"; //use double quotes  
        $this->email->initialize($config);
        // $url = base_url() . "user/confirmation/" . $saltid;
        $this->email->from('unisritamabpr@gmail.com', 'Web-BPR Unisritama');
        $this->email->to('unisritamabpr@yahoo.co.id');
        $this->email->subject('Pembukaan Rekening Baru!');
        $message = "<html><head><head></head><body><p>Hi,</p><p>Terdapat Nasabah Baru yang sudah selesai Registrasi. Harap segera di verifikasi!</p><br/><p>Sincerely,</p><p>www.bprunisritama.com</p></body></html>";
        $this->email->message($message);
        return $this->email->send();
    }
}
