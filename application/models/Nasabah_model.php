<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Nasabah_model extends CI_Model
{

    private $_table = "nasabah_tab";
    public $id_nsb;
    public $kd_ref;
    public $nm_lengkap;
    public $nm_identitas;
    public $jenis_kelamin;
    public $agama;
    public $warga_negara;
    public $jenis_identitas;
    public $masa_berlaku;
    public $no_identitas;
    public $alamat_identitas;
    public $provinsi_identitas;
    public $kab_identitas;
    public $kec_identitas;
    public $kel_identitas;
    public $pos_identitas;
    public $tempat_lahir;
    public $tgl_lahir;
    public $no_hp;
    public $email;
    public $alamat_domisili;
    public $prov_domisili;
    public $kab_domisili;
    public $kec_domisili;
    public $kel_domisili;
    public $pos_domisili;
    public $npwp;
    public $nm_ayah;
    public $nm_ibu;
    public $nm_ahli_waris;
    public $hb_ahli_waris;
    public $alamat_ahli_waris;
    public $no_ahli_waris;
    public $status_menikah;
    public $nm_pasangan;
    public $tmp_lhr_pasangan;
    public $tgl_lhr_pasangan;
    public $identitas_pasangan;
    public $no_identitas_pasangan;
    public $alamat_pasangan;
    public $no_pasangan;
    public $profesi;
    public $jenis_pekerjaan;
    public $status_pekerjaan;
    public $sumber_dana;
    public $jabatan;
    public $gaji_bln;
    public $perusahaan;
    public $alamat_kantor;
    public $telp_kantor;
    public $email_kantor;
    public $status_rumah;
    public $tanggungan;
    public $tujuan_buka;
    public $jenis_tab;
    public $pendidikan;
    public $ft_identitas;
    public $ft_kk;
    public $ft_diri;
    public $ft_ttd;
    public $ft_npwp;
    public $status;
    public $upload_date;

    public function tesCreateNsb()
    {
        print_r($this->input->post());
    }

    public function createNsb()
    {
        $post = $this->input->post();
        $this->id_nsb = uniqid();
        $this->kd_ref = $this->createRef();
        $this->nm_lengkap = $post['nm_lengkap'];
        $this->nm_identitas = $post['nm_identitas'];
        $this->jenis_kelamin = $post['jenis_kelamin'];
        $this->agama = $post['agama'];
        $this->warga_negara = $post['warga_negara'];
        $this->jenis_identitas = $post['jenis_identitas'];
        $this->masa_berlaku = $post['masa_berlaku'];
        $this->no_identitas = $post['no_identitas'];
        $this->alamat_identitas = $post['alamat_identitas'];
        $this->provinsi_identitas = $post['provinsi_identitas'];
        $this->kab_identitas = $post['kab_identitas'];
        $this->kec_identitas = $post['kec_identitas'];
        $this->kel_identitas = $post['kel_identitas'];
        $this->pos_identitas = $post['pos_identitas'];
        $this->tempat_lahir = $post['tempat_lahir'];
        $this->tgl_lahir = $post['tgl_lahir'];
        $this->no_hp = $post['no_hp'];
        $this->email = $post['email'];
        $this->alamat_domisili = $post['alamat_domisili'];
        $this->prov_domisili = $post['prov_domisili'];
        $this->kab_domisili = $post['kab_domisili'];
        $this->kec_domisili = $post['kec_domisili'];
        $this->kel_domisili = $post['kel_domisili'];
        $this->pos_domisili = $post['pos_domisili'];
        $this->npwp = $post['npwp'];
        $this->nm_ayah = $post['nm_ayah'];
        $this->nm_ibu = $post['nm_ibu'];
        $this->nm_ahli_waris = $post['nm_ahli_waris'];
        $this->hb_ahli_waris = $post['hb_ahli_waris'];
        $this->alamat_ahli_waris = $post['alamat_ahli_waris'];
        $this->no_ahli_waris = $post['no_ahli_waris'];
        $this->status_menikah = $post['status_menikah'];
        $this->nm_pasangan = $post['nm_pasangan'];
        $this->tmp_lhr_pasangan = $post['tmp_lhr_pasangan'];
        $this->tgl_lhr_pasangan = $post['tgl_lhr_pasangan'];
        $this->identitas_pasangan = $post['identitas_pasangan'];
        $this->no_identitas_pasangan = $post['no_identitas_pasangan'];
        $this->alamat_pasangan = $post['alamat_pasangan'];
        $this->no_pasangan = $post['no_pasangan'];
        $this->profesi = $post['profesi'];
        $this->jenis_pekerjaan = $post['jenis_pekerjaan'];
        $this->status_pekerjaan = $post['status_pekerjaan'];
        $this->sumber_dana = $post['sumber_dana'];
        $this->jabatan = $post['jabatan'];
        $this->gaji_bln = $post['gaji_bln'];
        $this->perusahaan = $post['perusahaan'];
        $this->alamat_kantor = $post['alamat_kantor'];
        $this->telp_kantor = $post['telp_kantor'];
        $this->email_kantor = $post['email_kantor'];
        $this->status_rumah = $post['status_rumah'];
        $this->tanggungan = $post['tanggungan'];
        $this->tujuan_buka = $post['tujuan_buka'];
        $this->jenis_tab = $post['jenis_tab'];
        $this->pendidikan = $post['pendidikan'];
        $files = $this->upload();
        $this->ft_identitas = $files['ft_identitas']['file_name'];
        $this->ft_kk = $files['ft_kk']['file_name'];
        $this->ft_diri = $files['ft_diri']['file_name'];
        $this->ft_ttd = $files['ft_ttd']['file_name'];
        $this->ft_npwp = $files['ft_npwp']['file_name'];
        $this->upload_date = date('Y-m-d');
        $this->status = 'WAITING';
        // print_r($files);
        // echo json_encode($files);
        // die;
        $this->db->insert($this->_table, $this);
        $this->session->set_flashdata('success', '<strong>Congratulation!</strong> Kode Referensi: ' . $this->kd_ref . ' Data anda telah disimpan. Mohon tunggu verifikasi dari pihak Bank Unisritama.');
    }

    public function unggah()
    {
        $this->id_nsb = uniqid();
        $data['nama'] = $this->input->post('nama');
        $fill = $this->upload();
        $data['ft_identitas'] = $fill['ft_identitas']['file_name'];
        $data['ft_kk'] = $fill['ft_kk']['file_name'];
        $data['ft_diri'] = $fill['ft_diri']['file_name'];
        $data['ft_ttd'] = $fill['ft_ttd']['file_name'];
        $data['ft_npwp'] = $fill['ft_npwp']['file_name'];

        echo json_encode($data);
        die;
    }

    private function upload()
    {
        $config['upload_path'] = './upload/nasabah/';
        $config['allowed_types'] = 'gif|jpg|png|jpeg';
        $config['max_size'] = 0;
        // $config['file_name'] = $this->id_nsb;
        $config['encrypt_name'] = true;

        $this->upload->initialize($config);
        if (!$this->upload->do_upload('ft_identitas')) {
            $this->session->set_flashdata('success', $this->upload->display_errors());
            redirect('pembukaan-rekening-tabungan');
        } else {
            $ft_identitas = $this->upload->data();
        }
        if (!$this->upload->do_upload('ft_kk')) {
            $this->session->set_flashdata('success', $this->upload->display_errors());
            redirect('pembukaan-rekening-tabungan');
        } else {
            $ft_kk = $this->upload->data();
        }
        if (!$this->upload->do_upload('ft_diri')) {
            $this->session->set_flashdata('success', $this->upload->display_errors());
            redirect('pembukaan-rekening-tabungan');
        } else {
            $ft_diri = $this->upload->data();
        }
        if (!$this->upload->do_upload('ft_ttd')) {
            $this->session->set_flashdata('success', $this->upload->display_errors());
            redirect('pembukaan-rekening-tabungan');
        } else {
            $ft_ttd = $this->upload->data();
        }
        // if (empty($_FILES['ft_npwp']['file_name'])) {
        if (!file_exists($_FILES['ft_npwp']['tmp_name']) || !is_uploaded_file($_FILES['ft_npwp']['tmp_name'])) {
            $ft_npwp = array('file_name' => 'NULL');
        } else {
            if (!$this->upload->do_upload('ft_npwp')) {
                $this->session->flashdata('success', '<strong>Foto NPWP gagal di Upload!</strong>');
                redirect('pembukaan-rekening-tabungan');
            } else {
                $ft_npwp = $this->upload->data();
            }
        }
        $files = array('ft_identitas' => $ft_identitas, 'ft_kk' => $ft_kk, 'ft_diri' => $ft_diri, 'ft_ttd' => $ft_ttd, 'ft_npwp' => $ft_npwp);
        // print_r($files);
        // die;
        return $files;
    }

    public function getTab()
    {
        $this->db->select('*')
            ->from($this->_table)
            ->join('produk', $this->_table . '.jenis_tab=produk.id_produk');
        return $this->db->get();
    }

    public function getByIdNsb($id_nsb)
    {
        $this->db->select('*, provinsi.nama as prop, kabupaten.nama as kab_id, 
                            kecamatan.nama as kec_id, kelurahan.nama as kel_id, 
                            kelurahan.id_jenis as daerah, p.nama as prop_dom, kab.nama as kab_dom,
                            kec.nama as kec_dom, kel.nama as kel_dom, kel.id_jenis as daerah1
                            ')
            ->from('nasabah_tab')
            ->join('produk', $this->_table . '.jenis_tab=produk.id_produk', 'left')
            ->join('provinsi', $this->_table . '.provinsi_identitas=provinsi.id_prov', 'inner')
            ->join('kabupaten', $this->_table . '.kab_identitas=kabupaten.id_kab', 'inner')
            ->join('kecamatan', $this->_table . '.kec_identitas=kecamatan.id_kec', 'inner')
            ->join('kelurahan', $this->_table . '.kel_identitas=kelurahan.id_kel', 'inner')
            ->join('provinsi as p', $this->_table . '.prov_domisili=p.id_prov', 'inner')
            ->join('kabupaten as kab', $this->_table . '.kab_domisili=kab.id_kab', 'inner')
            ->join('kecamatan as  kec', $this->_table . '.kec_domisili=kec.id_kec', 'inner')
            ->join('kelurahan as  kel', $this->_table . '.kel_domisili=kel.id_kel', 'inner')
            ->where('id_nsb', $id_nsb);
        return $this->db->get();
    }

    public function getAll()
    {
        $this->db->select('*');
        $this->db->from($this->_table);
        return $this->db->get();
    }

    public function getJumlah()
    {
        // $this->db->select('MONTH(upload_date) AS bulan, COUNT(*) AS jumlah_bulanan');
        // SELECT  COUNT(IF( YEAR(tgl_byr) = 2016, jml_byr, NULL)) AS item_2016,        
        $this->db->select('
        COUNT(IF(MONTH(upload_date) = 01, upload_date,null)) AS bulan_1,
        COUNT(IF(MONTH(upload_date) = 02, upload_date,null)) AS bulan_2,
        COUNT(IF(MONTH(upload_date) = 03, upload_date,null)) AS bulan_3,
        COUNT(IF(MONTH(upload_date) = 04, upload_date,null)) AS bulan_4,
        COUNT(IF(MONTH(upload_date) = 04, upload_date,null)) AS bulan_4,
        COUNT(IF(MONTH(upload_date) = 05, upload_date,null)) AS bulan_5,
        COUNT(IF(MONTH(upload_date) = 06, upload_date,null)) AS bulan_6,
        COUNT(IF(MONTH(upload_date) = 07, upload_date,null)) AS bulan_7,
        COUNT(IF(MONTH(upload_date) = 08, upload_date,null)) AS bulan_8,
        COUNT(IF(MONTH(upload_date) = 09, upload_date,null)) AS bulan_9,
        COUNT(IF(MONTH(upload_date) = 10, upload_date,null)) AS bulan_10,
        COUNT(IF(MONTH(upload_date) = 11, upload_date,null)) AS bulan_11,
        COUNT(IF(MONTH(upload_date) = 12, upload_date,null)) AS bulan_12,
        ');
        // $this->db->group_by('MONTH(upload_date)');
        $this->db->from($this->_table);
        return $this->db->get();
    }

    public function getTujuan()
    {
        $this->db->select('
        COUNT(IF(tujuan_buka= "Simpanan", tujuan_buka, null)) AS simpanan,
        COUNT(IF(tujuan_buka= "Penerimaan Gaji", tujuan_buka, null)) AS gaji,
        COUNT(IF(tujuan_buka= "Penyaluran Kredit", tujuan_buka, null)) AS kredit,
        ');
        $this->db->from($this->_table);
        return $this->db->get();
    }

    private function createRef()
    {
        $this->db->select('RIGHT(nasabah_tab.kd_ref,4) as kode', FALSE);
        $this->db->order_by('kd_ref', 'DESC');
        $this->db->limit(1);
        $query = $this->db->get('nasabah_tab');      //cek dulu apakah ada sudah ada kode di tabel.    
        if ($query->num_rows() <> 0) {
            //jika kode ternyata sudah ada.      
            $data = $query->row();
            $kode = intval($data->kode) + 1;
        } else {
            //jika kode belum ada      
            $kode = 1;
        }

        $kodemax = str_pad($kode, 4, "0", STR_PAD_LEFT); // angka 4 menunjukkan jumlah digit angka 0
        $kodejadi = "TAB-" . date("ym-") . $kodemax;    // hasilnya ODJ-9921-0001 dst.
        return $kodejadi;
    }

    public function approve($id_nsb)
    {
        $this->db->set('status', 'Approved');
        $this->db->where('id_nsb', $id_nsb);
        $this->db->update($this->_table);
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

    public function delete($id_nsb)
    {
        return $this->db->delete($this->_table, array('id_nsb' => $id_nsb));
    }
}

/* End of file Nasabah_model.php */
