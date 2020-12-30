<?php

defined('BASEPATH') or exit('No direct script access allowed');

class User_model extends CI_Model
{
    private $_table = 'user';
    public $id_user;
    public $name;
    public $username;
    public $email;
    public $password;
    public $role_id;
    public $image;
    public $date_created;
    private $db3;

    public function __construct()
    {
        parent::__construct();
        $this->db3 = $this->load->database('wh', TRUE);
    }


    public function getProfil()
    {
        $id = $this->session->userdata('id_user');
        $this->db->select('*')
            ->from($this->_table)
            ->join('role', 'user.role_id=role.id_role')
            ->where('user.id_user', $id);
        return $this->db->get();

        // return $this->db->get_where($this->_table, ['id_user' => $id])->row();
    }

    public function simpan()
    {
        $post = $this->input->post();
        $this->id_user = uniqid();
        $this->name = htmlspecialchars(strtoupper($post['name']));
        $this->username = htmlspecialchars(strtoupper($post['username']));
        $this->email = htmlspecialchars(strtolower($post['email']));
        $this->password = password_hash($this->input->post('password1'), PASSWORD_DEFAULT);
        $this->role_id = htmlspecialchars($post['role_id']);
        $this->image = $this->_UploadImage();
        $this->date_created = time();

        $this->db->insert($this->_table, $this);
    }

    private function _UploadImage()
    {
        $config['upload_path'] = './upload/user/';
        $config['allowed_types'] = 'gif|jpg|png';
        $config['file_name'] = $this->id_user;
        $config['overwrite'] = true;
        $config['max_size'] = 1024;

        $this->upload->initialize($config);

        if (!$this->upload->do_upload('image')) {
            $this->session->set_flashdata('message', $this->upload->display_errors());
            redirect('admin/registration');
        } else {
            return $this->upload->file_name;
        }
    }

    public function getRole()
    {
        return $this->db->get('role');
    }

    public function getAll()
    {
        return $this->db->get($this->_table);
    }

    public function getProv()
    {
        $this->db->select('id_prov,nama');
        return $this->db->get('provinsi')->result();
    }

    public function viewKab($id)
    {
        $this->db->select('*');
        $this->db->where('id_prov', $id);
        $this->db->order_by('nama', 'asc');
        return $this->db->get('kabupaten')->result();
    }
    public function viewKec($id)
    {
        $this->db->select('*');
        $this->db->where('id_kab', $id);
        $this->db->order_by('nama', 'asc');
        return $this->db->get('kecamatan')->result();
    }
    public function viewDesa($id)
    {
        $this->db->select('*');
        $this->db->where('id_kec', $id);
        $this->db->order_by('nama', 'asc');
        return $this->db->get('kelurahan')->result();
    }

    public function getSimpanan()
    {
        $data = array('5eaa93a989a72', '5e96bb4b21ce7', '5eaa93647a4cb');
        $this->db->select('*');
        $this->db->where_in('id_produk', $data);
        $this->db->order_by('produk', 'asc');
        return $this->db->get('produk')->result();
    }
    public function getUmum()
    {
        $data = array('5eaa92ba0efa1', '5ee0aba96f640');
        $this->db->select('*');
        $this->db->where_in('id_produk', $data);
        $this->db->order_by('produk', 'asc');
        return $this->db->get('produk')->result();
    }

    public function cekUser($norek, $username)
    {
        $this->db3->select('Nama');
        $this->db3->where('NIK', $username);
        $this->db3->where('rektab', $norek);
        return $this->db3->get('nasabahsms');
    }
    public function cekNsb($norek, $username)
    {
        // $db3 = $this->load->database('wh', TRUE);
        $this->db3->select('Nama');
        $this->db3->where('username', $username);
        $this->db3->where('rektab', $norek);
        return $this->db3->get('nasabahsms');
    }

    public function cekSaldo($norek)
    {
        $db2 = $this->load->database('core', TRUE);
        $db2->select('*')
            ->from('rekening');
        $db2->where('norek', $norek);
        return $db2->get()->row();
    }
    public function getd()
    {
        $curdate = "20201228";
        $this->db2->select('saldo');
        $this->db2->where('norek', '00101034327');
        return $this->db2->get('rekening_20201228');
        # code...
    }
}

/* End of file User_model.php */
