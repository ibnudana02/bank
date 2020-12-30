<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Bot extends CI_Controller
{


    function __construct()
    {
        parent::__construct();
        $this->load->model('User_model', 'user');
        // $this->db2 = $this->load->database('cbs', TRUE);
    }

    function index()
    {
        $TOKEN = "1411964277:AAHPT_tyxz9hS0d4EGzyJQLezWXtHCB_gQo";
        $apiURL = "https://api.telegram.org/bot$TOKEN";
        $update = json_decode(file_get_contents("php://input"), TRUE);
        $chatID = $update["message"]["chat"]["id"];
        $message = $update["message"]["text"];
        // $user = $update["message"]["chat"]["username"];
        if (empty($update["message"]["chat"]["username"])) {
            // $username = "";
            file_get_contents($apiURL . "/sendmessage?chat_id=" . $chatID . "&text=Bank Unisritama \r\n Username Anda belum tersedia. Mohon buat username anda terlebih dahulu.&parse_mode=HTML");
        } else {
            $username = $update["message"]["chat"]["username"];
        }

        if (strpos($message, "/start") === 0) {
            file_get_contents($apiURL . "/sendmessage?chat_id=" . $chatID . "&text=Selamat Datang di Layanan Instant Message Bank Unisritama <code>bprunisritama.com</code>.&parse_mode=HTML");
        } else if (strpos($message, "Saldo") === 0 || strpos($message, "saldo") === 0) {
            $pesan = explode(" ", $message);
            if (empty($pesan[1]) || strlen($pesan[1]) != '11') {
                file_get_contents($apiURL . "/sendmessage?chat_id=" . $chatID . "&text=No. Rekening tidak valid. Mohon berhati-hati menggunakan Layanan ini..&parse_mode=HTML");
            } else {
                $norek = $pesan[1];
                $cek = $this->user->cekUser($norek, $username);
                $nasabah = $cek->row();
                if ($cek->num_rows() > 0) {
                    $data = $this->user->cekSaldo($norek);
                    $saldo = "Rp " . number_format($data->saldo, 2, ',', '.');
                    // file_get_contents($apiURL . "/sendmessage?chat_id=" . $chatID . "&text=Bank Unisritama Saldo " . $data->norek . ", " . $cek->Nama . " " . $saldo . ",-&parse_mode=HTML");
                    file_get_contents($apiURL . "/sendmessage?chat_id=" . $chatID . "&text=Bank Unisritama-Saldo " . $data->norek . " " . ucwords(strtolower($nasabah->Nama)) . " " . $saldo . ",-&parse_mode=HTML");
                } else {
                    file_get_contents($apiURL . "/sendmessage?chat_id=" . $chatID . "&text=Bank Unisritama \r\n Username Anda belum terdaftar pada Sistem Kami. Mohon daftarkan username anda terlebih dahulu.&parse_mode=HTML");
                }
            }
        } else {
            file_get_contents($apiURL . "/sendmessage?chat_id=" . $chatID . "&text=Keyword yang anda masukkan salah. Mohon berhati-hati menggunakan Layanan ini..&parse_mode=HTML");
        }
    }
}
