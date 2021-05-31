<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Nasabah_model extends CI_Model
{

    private $_table = "reg_nasabah";

    public function saveNsb()
    {
        $post = $this->input->post();
        if (isset($post['dana_prov']) && isset($post['dana_sumber_dana']) && isset($post['dana_hasil_thn'])) {
            $dana_prov = $post['dana_prov'];
            $dana_sumber_dana = $post['dana_sumber_dana'];
            $dana_hasil_thn = $post['dana_hasil_thn'];
        } else {
            $dana_prov = '';
            $dana_hasil_thn = '';
            $dana_sumber_dana = '';
        }
        $upload = $this->upload();
        $dana = array();
        if ($post['nsb_profesi'] == 3 | $post['nsb_profesi'] == 4 | $post['nsb_profesi'] == 5) {
            echo 'Nasabah ini tidak bekerja';
        }
        $object = array(
            'nsb_id' => uniqid(),
            'kd_ref' => $this->createRef(),
            'nsb_nik' => $post['nsb_nik'],
            'nsb_nama' => $post['nsb_nama'],
            'nsb_email' => $post['nsb_email'],
            'nsb_hp' => $post['nsb_hp'],
            'nsb_pendidikan' => $post['nsb_pendidikan'],
            'nsb_tujuan' => $post['nsb_tujuan_buka'],
            'nsb_sumberdana' => $post['nsb_sumber'],
            'nsb_trx_thn' => $post['nsb_transaksi'],
            'nsb_npwp' => $post['nsb_npwp'],
            'nsb_alamat' => $post['alamat_domisili'],
            'nsb_rt' => $post['nsb_rt'],
            'nsb_rw' => $post['nsb_rw'],
            'nsb_kelurahan' => $post['kel_domisili'],
            'nsb_kecamatan' => $post['kec_domisili'],
            'nsb_pos_alamat' => $post['pos_domisili'],
            'nsb_kerja' => $post['nsb_profesi'],
            'nsb_gaji_thn' => $post['nsb_gaji_th'],
            'nsb_kantor' => $post['nsb_kantor'],
            'nsb_alamat_kantor' => $post['alamat_kantor'],
            'nsb_pos_kantor' => $post['pos_kantor'],
            'nsb_jabatan' => $post['nsb_jabatan'],
            'nsb_mulai_kerja' => $post['mulai_bekerja'],
            'nsb_telp_kantor' => $post['telp_kantor'],
            'nsb_ktp' => $upload['nsb_ktp']['file_name'],
            'nsb_swafoto' => $upload['nsb_swafoto']['file_name'],
            // field utk pemberi dana
            'nsb_pemberi_dana' => $post['dana_nama'],
            'nsb_id_dana' => $post['dana_id'],
            'nsb_noid_dana' => $post['dana_noid'],
            'nsb_npwp_dana' => $post['dana_npwp'],
            'nsb_alamat_dana' => $post['dana_alamat'],
            'nsb_rt_dana' => $post['dana_rt'],
            'nsb_rw_dana' => $post['dana_rw'],
            'nsb_prov_dana' => $dana_prov,
            'nsb_kota_dana' => $post['dana_kota'],
            'nsb_kec_dana' => $post['dana_kec'],
            'nsb_kel_dana' => $post['dana_kel'],
            'nsb_sb_dana' => $dana_sumber_dana,
            'nsb_dana_thn' => $dana_hasil_thn,

            'nsb_status' => 'WAITING',
            'nsb_created' => date('Y-m-d')
        );
        // print_r($object);
        // die;
        $this->db->insert('reg_nasabah', $object);
        $this->session->set_flashdata('message', '<strong>Congratulation!</strong> Kode Referensi: ' . $object['kd_ref'] . ' Data anda telah disimpan. Mohon tunggu verifikasi dari pihak Bank Unisritama.');
    }

    private function upload()
    {
        $config['upload_path'] = './upload/nasabah/';
        $config['allowed_types'] = 'gif|jpg|png|jpeg';
        $config['max_size'] = 0;
        $config['encrypt_name'] = true;

        $this->upload->initialize($config);
        if (!$this->upload->do_upload('nsb_ktp')) {
            $this->session->set_flashdata('message', $this->upload->display_errors());
            redirect('dataDiri');
        } else {
            $nsb_ktp = $this->upload->data();
        }
        if (!$this->upload->do_upload('nsb_swafoto')) {
            $this->session->set_flashdata('message', $this->upload->display_errors());
            redirect('dataDiri');
        } else {
            $nsb_swafoto = $this->upload->data();
        }
        $files = array('nsb_ktp' => $nsb_ktp, 'nsb_swafoto' => $nsb_swafoto);
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
        $this->db->where('nsb_id', $id_nsb);
        return $this->db->get();
    }
    public function getByID($nsb_id)
    {
        $this->db->select('nsb_nama,kd_ref, produk.produk')
            ->join('produk', $this->_table . '.jenis_tab=produk.id_produk', 'left')
            // ->join('provinsi', $this->_table . '.nsb_prov_dana=provinsi.id_prov', 'inner')
            // ->join('kabupaten', $this->_table . '.nsb_kota_dana=kabupaten.id_kab', 'inner')
            // ->join('kecamatan', $this->_table . '.nsb_kec_dana=kecamatan.id_kec', 'inner')
            // ->join('kelurahan', $this->_table . '.nsb_kel_dana=kelurahan.id_kel', 'inner')
            ->where('nsb_id', $nsb_id);
        return $this->db->get('reg_nasabah');
    }

    public function getAll()
    {
        $this->db->select('*');
        $this->db->from($this->_table);
        return $this->db->get();
    }

    public function getJumlah()
    {
        $this->db->select('
        COUNT(IF(MONTH(nsb_created) = 01, nsb_created,null)) AS bulan_1,
        COUNT(IF(MONTH(nsb_created) = 02, nsb_created,null)) AS bulan_2,
        COUNT(IF(MONTH(nsb_created) = 03, nsb_created,null)) AS bulan_3,
        COUNT(IF(MONTH(nsb_created) = 04, nsb_created,null)) AS bulan_4,
        COUNT(IF(MONTH(nsb_created) = 04, nsb_created,null)) AS bulan_4,
        COUNT(IF(MONTH(nsb_created) = 05, nsb_created,null)) AS bulan_5,
        COUNT(IF(MONTH(nsb_created) = 06, nsb_created,null)) AS bulan_6,
        COUNT(IF(MONTH(nsb_created) = 07, nsb_created,null)) AS bulan_7,
        COUNT(IF(MONTH(nsb_created) = 08, nsb_created,null)) AS bulan_8,
        COUNT(IF(MONTH(nsb_created) = 09, nsb_created,null)) AS bulan_9,
        COUNT(IF(MONTH(nsb_created) = 10, nsb_created,null)) AS bulan_10,
        COUNT(IF(MONTH(nsb_created) = 11, nsb_created,null)) AS bulan_11,
        COUNT(IF(MONTH(nsb_created) = 12, nsb_created,null)) AS bulan_12,
        ');
        $this->db->from($this->_table);
        return $this->db->get();
    }

    public function getStatTujuan()
    {
        $this->db->select('
        COUNT(IF(nsb_tujuan= 1, nsb_tujuan, null)) AS simpanan,
        COUNT(IF(nsb_tujuan= 2, nsb_tujuan, null)) AS gaji,
        COUNT(IF(nsb_tujuan= 3, nsb_tujuan, null)) AS kredit,
        ');
        $this->db->from($this->_table);
        return $this->db->get();
    }

    private function createRef()
    {
        $this->db->select('RIGHT(reg_nasabah.kd_ref,4) as kode', FALSE);
        $this->db->order_by('kd_ref', 'DESC');
        $this->db->limit(1);
        $query = $this->db->get('reg_nasabah');      //cek dulu apakah ada sudah ada kode di tabel.    
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

    public function getProfesi()
    {
        return $this->db->get('pekerjaan')->result();
    }

    public function getSumber()
    {
        return $this->db->get('sumber_dana')->result();
    }

    public function getTujuan()
    {
        return $this->db->get('tujuan')->result();
    }

    public function getIdentitas()
    {
        return $this->db->get('jenis_identitas')->result();
    }

    public function getPendidikan()
    {
        $this->db->order_by('id_pd', 'desc');
        return $this->db->get('pendidikan')->result();
    }
}

/* End of file Nasabah_model.php */
