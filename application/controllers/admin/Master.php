<?php

defined('BASEPATH') or exit('No direct script access allowed');
ob_start();

class Master extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $nama = $this->session->has_userdata('name');
        if (empty($nama)) {
            $this->session->set_flashdata('message', 'You dont have Permission to access this Page!');
            redirect(base_url(), 'refresh');
        } elseif ($this->session->userdata('role_id') !== "1") {
            if ($this->session->userdata('role_id') == "2") {
                # code...
                $this->session->set_flashdata('message', 'Enjoy the page!');
            } else {
                $this->session->unset_userdata('$nama');
                $this->session->set_flashdata('message', 'You dont have Permission to access this Page!');
                redirect(base_url());
            }
        }
        $this->load->model('Nasabah_model', 'nsb');
        $this->load->library('Pdf');
        $this->load->helper('tanggal');
    }

    public function index()
    {
        $data['title'] = 'Data Nasabah';
        $data['heading'] = 'Master Data';
        $data['user'] = $this->db->get_where('user', ['name' => $this->session->userdata('name')])->row_array();
        $data['data'] = $this->nsb->getTab()->result();
        $data['judul'] = 'BPR Unisritama - Master Data';
        $this->load->view('template/admin_header', $data);
        $this->load->view('admin/nasabah_tab');
        $this->load->view('template/admin_footer');
    }

    public function approve($id_nsb)
    {
        $d = $this->nsb->getByIdNsb($id_nsb)->row();
        $p = $this->uri->segment(3);
        if ($d->status == 'WAITING' && $p == 0) {
            $this->nsb->approve($id_nsb);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">eForm <strong>' . $d->nm_lengkap . '</strong> telah berhasil di Approved!</div>');
            redirect('nasabah-tab', 'refresh');
        } elseif ($d->status == 'WAITING' && $p == 1) {
            $this->nsb->approve($id_nsb);
            echo "<script>
            window.open('" . base_url('cetak-nasabah-tab/' . $id_nsb) . "')
            </script>";
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">eForm <strong>' . $d->nm_lengkap . '</strong> telah berhasil di Approved!</div>');
            redirect('nasabah-tab', 'refresh');
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">eForm <strong>' . $d->nm_lengkap . '</strong> tidak valid!</div>');
            redirect('nasabah-tab', 'refresh');
        }
    }

    public function delete($id_nsb)
    {
        if (!isset($id_nsb)) show_404(); //jika tidak ada $id yang dipilih, tampilkan error page
        if ($this->nsb->delete($id_nsb)) { //jika $id terpilih, lakukan hapus data 
            $this->session->set_flashdata( //tambahkan pesan jika berhasil
                'message',
                '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                Hapus Data Nasabah<strong>Berhasil!</strong>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span></button></div>'
            );
            redirect(site_url('nasabah-tab')); //arahkan ke halaman list berita
        }
    }

    public function print_nasabah($id_nsb)
    {
        $data['data_nsb'] = $this->nsb->getByIdNsb($id_nsb)->row();
        // var_dump($data['data_nsb']);
        // die;
        $this->load->view('cetakData_nsb', $data);
    }

    public function test()
    {
        echo "<script>window.open('" . base_url() . "')</script>";

        redirect(base_url(), 'refresh');
    }
}

/* End of file Master.php */
