<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Produk extends CI_Controller
{
    var $data = array();

    public function __construct()
    {
        parent::__construct();
        $this->load->library('email');
        $this->load->helper('captcha');


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
        $this->load->view('template/new_header', $data); //passing data to header view
        $this->load->view('produk/new_pmb', $data); //passing data to content view
        $this->load->view('template/new_footer');
    }

    public function ppob()
    {
        $data = $this->data;
        $data['judul'] = 'Payment Point Online Bank | Bank Unisritama';
        $data['category'] = $this->kategori->getAll(); //Ambil data kategori
        $data['berita'] = $this->berita->getLima(); //Ambil data berita
        $data['row'] =  $this->produk->getPayment(); //Ambil data berita
        $this->load->view('template/new_header', $data);
        $this->load->view('produk/pmb', $data);
        $this->load->view('template/new_footer');
    }

    public function deposito()
    {
        $data = $this->data;
        $data['judul'] = 'Deposito | Bank Unisritama';
        $data['bread'] = 'Home';
        $data['crumb'] = 'Produk Deposito';
        $data['data'] = $this->produk->getDep()->result();
        $this->load->view('template/new_header', $data);
        $this->load->view('produk/new_produk', $data);
        $this->load->view('template/new_footer');
    }

    public function tabungan()
    {
        $data = $this->data;
        $data['judul'] = 'Tabungan | Bank Unisritama';
        $data['bread'] = 'Home';
        $data['crumb'] = 'Produk Tabungan';
        $data['data'] = $this->produk->getTab()->result();
        $this->load->view('template/new_header', $data);
        $this->load->view('produk/new_produk', $data);
        $this->load->view('template/new_footer');
    }

    public function kredit()
    {
        $data = $this->data;
        $data['judul'] = 'Kredit | Bank Unisritama';
        $data['bread'] = 'Home';
        $data['crumb'] = 'Produk Kredit';
        $data['data'] = $this->produk->getKrd()->result();
        $this->load->view('template/new_header', $data);
        $this->load->view('produk/new_produk', $data);
        $this->load->view('template/new_footer');
    }

    public function dana()
    {
        $data = $this->data;
        $data['judul'] = 'Produk Dana | Bank Unisritama';
        $data['bread'] = 'Home';
        $data['crumb'] = 'Produk Dana';
        $data['data'] = $this->produk->getDana()->result();
        $this->load->view('template/new_header', $data);
        $this->load->view('produk/new_produk', $data);
        $this->load->view('template/new_footer');
    }
    public function layanan()
    {
        $data = $this->data;
        $data['judul'] = 'Layanan | Bank Unisritama';
        $data['bread'] = 'Home';
        $data['crumb'] = 'Layanan';
        $data['data'] = $this->produk->getLayanan()->result();
        $this->load->view('template/new_header', $data);
        $this->load->view('produk/new_produk', $data);
        $this->load->view('template/new_footer');
    }

    public function produk()
    {
        $data = $this->data;
        $data['judul'] = 'Produk | Bank Unisritama';
        $data['bread'] = 'Home';
        $data['crumb'] = 'Produk';
        $data['data'] = $this->produk->getAll();
        $this->load->view('template/new_header', $data);
        $this->load->view('produk/new_produk', $data);
        $this->load->view('template/new_footer');
    }

    public function detailProduk($slug)
    {
        $data = $this->data;
        $row = $this->produk->getBySlug($slug);
        $data['judul'] = ucwords($row->produk) . ' | Bank Unisritama';
        $data['dps'] = $this->produk->getDep()->result();
        $data['tab'] = $this->produk->getTab()->result();
        $data['krd'] = $this->produk->getKrd()->result();
        $data['berita'] = $this->berita->getLima();
        $data['row'] = $row;
        $data['metaProduk'] = $row;
        // var_dump($data['metaProduk']);
        // die;
        $this->load->view('template/new_header', $data);
        $this->load->view('produk/new_detail', $data);
        $this->load->view('template/new_footer');
    }

    public function form_by($id = null)
    {
        $data['judul'] = 'e-Form - Bank Unisritama';
        $this->form_validation->set_rules('ketentuan', 'Syarat & Ketentuan', 'trim|required');
        if ($this->form_validation->run() === TRUE) {
            if (!$this->input->post('ketentuan')) {
                $this->load->view('template/header_eform', $data);
                $this->load->view('produk/syaratKetentuan', $data);
                $this->load->view('template/footer_eform');
            } else {
                redirect(base_url('dataDiri/' . $id), 'refresh');
            }
        } else {
            $this->load->view('template/header_eform', $data);
            $this->load->view('produk/syaratKetentuan');
            $this->load->view('template/footer_eform');
        }
    }

    public function create_Tab($id)
    {
        $this->form_validation->set_rules('nsb_nama', 'Nama Lengkap', 'required|trim', ['required' => 'Nama Lengkap harus diisi!']);
        $this->form_validation->set_rules('nsb_nik', 'No Identitas', 'required|trim', ['required' => 'NIK harus diisi!']);
        $this->form_validation->set_rules('nsb_email', 'Email', 'required|trim|valid_email', ['required' => 'Email harus diisi!']);
        $this->form_validation->set_rules('nsb_hp', 'No. HP', 'required|trim', ['required' => 'No. HP harus diisi!']);
        $this->form_validation->set_rules('nsb_pendidikan', 'Pendidikan', 'required|trim', ['required' => 'Pendidikan harus diisi!']);
        $this->form_validation->set_rules('nsb_tujuan_buka', 'Tujuan Pembukaan', 'required|trim', ['required' => 'Tujuan Pembukaan harus diisi!']);
        $this->form_validation->set_rules('nsb_sumber', 'Sumber Dana', 'required|trim', ['required' => 'Tujuan Pembukaan harus diisi!']);
        $this->form_validation->set_rules('nsb_transaksi', 'Perkiraan Transaksi', 'required|trim', ['required' => 'Perkiraan Transaksi harus diisi!']);
        $this->form_validation->set_rules('nsb_npwp', 'NPWP', 'trim');
        $this->form_validation->set_rules('alamat_domisili', 'Alamat', 'required|trim', ['required' => 'Alamat Saat ini harus diisi!']);
        $this->form_validation->set_rules('nsb_rt', 'RT', 'required|trim', ['required' => 'RT harus diisi!']);
        $this->form_validation->set_rules('nsb_rw', 'RW', 'required|trim', ['required' => 'RW harus diisi!']);
        $this->form_validation->set_rules('kel_domisili', 'Kelurahan', 'required|trim', ['required' => 'Kelurahan harus diisi!']);
        $this->form_validation->set_rules('kec_domisili', 'Kecamatan', 'required|trim', ['required' => 'Kecamatan harus diisi!']);
        $this->form_validation->set_rules('pos_domisili', 'Kode Pos Domisili', 'trim|alpha_numeric');
        $this->form_validation->set_rules('nsb_ktp', 'Dokumen KTP', 'trim');
        $this->form_validation->set_rules('nsb_swafoto', 'Swafoto memegang KTP', 'trim');
        $this->form_validation->set_rules('nsb_profesi', 'Profesi', 'required|trim', ['required' => 'Profesi harus diisi!']);
        // Rules untuk nasabah yang bekerja
        $this->form_validation->set_rules('nsb_gaji_th', 'Gaji', 'trim|alpha_numeric');
        $this->form_validation->set_rules('nsb_jabatan', 'Jabatan', 'trim');
        $this->form_validation->set_rules('nsb_kantor', 'Nama Perusahaan / Usaha', 'trim');
        $this->form_validation->set_rules('alamat_kantor', 'Alamat Perusahaan/Usaha', 'trim');
        $this->form_validation->set_rules('pos_kantor', 'Kode Pos Perusahaan/Usaha', 'trim|alpha_numeric');
        $this->form_validation->set_rules('telp_kantor', 'Telp Kantor', 'trim|alpha_numeric');
        $this->form_validation->set_rules('mulai_bekerja', 'Mulai Bekerja', 'trim');
        // Rules untuk nasabah (Mahasiswa/IRT/Tidak bekerja)
        $this->form_validation->set_rules('dana_nama', 'Nama Pemberi Dana', 'trim');
        $this->form_validation->set_rules('dana_id', 'Jenis Identitas', 'trim');
        $this->form_validation->set_rules('dana_noid', 'No. Identitas Pemberi Dana', 'trim');
        $this->form_validation->set_rules('dana_npwp', 'NPWP Pemberi Dana', 'trim');
        $this->form_validation->set_rules('dana_alamat', 'Alamat Pemberi Dana', 'trim');
        $this->form_validation->set_rules('dana_rt', 'RT Pemberi Dana', 'trim');
        $this->form_validation->set_rules('dana_rw', 'RW Pemberi Dana', 'trim');
        $this->form_validation->set_rules('dana_prov', 'Provinsi Pemberi Dana', 'trim');
        $this->form_validation->set_rules('dana_kota', 'Kabupaten Pemberi Dana', 'trim');
        $this->form_validation->set_rules('dana_kec', 'Kecamatan Pemberi Dana', 'trim');
        $this->form_validation->set_rules('dana_kel', 'Kelurahan Pemberi Dana', 'trim');
        $this->form_validation->set_rules('dana_sumber_dana', 'Sumber Penghasilan', 'trim');
        $this->form_validation->set_rules('dana_hasil_thn', 'Jumlah Penghasilan per Tahun', 'trim');

        $data = $this->data;
        $data['pendidikan'] = $this->nsb->getPendidikan();
        $data['profesi'] = $this->nsb->getProfesi();
        $data['sumber_dana'] = $this->nsb->getSumber();
        $data['tujuan_buka'] = $this->nsb->getTujuan();
        $data['identitas'] = $this->nsb->getIdentitas();
        $data['jenis'] = $this->produk->getTab()->result();
        $data['prop'] = $this->user->getProv();
        $data['judul'] = 'e-Form Rekening Tabungan - Bank Unisritama';

        if ($this->form_validation->run() == true) {
            $this->nsb->saveNsb($id);
        } else {
            $this->load->view('template/header_eform', $data);
            $this->load->view('produk/openRek', $data);
            $this->load->view('template/footer_eform');
        }
    }

    public function createDps()
    {
        $data = $this->data;
        $data['judul'] = 'e-Form Rekening Tabungan - Bank Unisritama';
        $data['bread'] = 'Home';
        $data['crumb'] = 'Produk';
        $data['jenis'] = $this->produk->getTab()->result();
        $data['prop'] = $this->user->getProv();
        $this->load->view('template/header', $data);
        $this->load->view('produk/opRek', $data);
        $this->load->view('template/footer');
    }
    public function createKrd()
    {
        $data = $this->data;
        $data['bread'] = 'Home';
        $data['crumb'] = 'Produk';
        $data['jenis'] = $this->produk->getTab()->result();
        $data['prop'] = $this->user->getProv();
        $data['judul'] = 'Pengajuan Kredit | Bank Unisritama';
        $data['jenis'] = $this->produk->getDep()->result();
        $data['prop'] = $this->user->getProv();
        $this->load->view('template/header', $data);
        $this->load->view('produk/bukaRek', $data);
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

    public function getDati()
    {
        $id = $this->input->post('id');
        $data = $this->input->post('data');

        if ($data == "kabupaten") {
            $daerah = $this->user->viewKab($id);
            $lists = "<option value='' selected='true' disabled='disabled'> Pilih Kabupaten</option>";
            foreach ($daerah as $data) {
                $lists .= "<option value='" . $data->id_kab . "' " . set_select('kab_identitas', $data->id_kab) . ">";
                $lists .= $data->nama . "</option>";
            }
            $callback = array('list_kota' => $lists); // Masukan variabel lists tadi ke dalam array $callback dengan index array : list_kota
            echo json_encode($callback);
        } elseif ($data == "kecamatan") {
            $daerah = $this->user->viewKec($id);
            $lists = "<option value='' selected='true' disabled='disabled'> Pilih Kecamatan</option>";
            foreach ($daerah as $data) {
                $lists .= "<option value='" . $data->id_kec . "'>";
                $lists .= $data->nama . "</option>";
            }
            $callback = array('list_kota' => $lists); // Masukan variabel lists tadi ke dalam array $callback dengan index array : list_kota
            echo json_encode($callback);
        } elseif ($data = "desa") {
            $daerah = $this->user->viewDesa($id);
            $lists = "<option value='' selected='true' disabled='disabled'> Pilih Desa/Kelurahan</option>";
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
}
