<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Bot extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('User_model', 'user');
    }

    function index()
    {
        $TOKEN = "1411964277:AAHPT_tyxz9hS0d4EGzyJQLezWXtHCB_gQo";
        $apiURL = "https://api.telegram.org/bot$TOKEN";
        $update = json_decode(file_get_contents("php://input"), TRUE);
        $chatID = $update["message"]["chat"]["id"];
        $message = $update["message"]["text"];

        if (strpos($message, "/start") === 0) {

            file_get_contents($apiURL . "/sendmessage?chat_id=" . $chatID . "&text=Haloo, test webhooks <code>bprunisritama.com</code>.&parse_mode=HTML");
        }

        if (strpos($message, "/saldo") === 0) {
            // $norek = explode("-",$message);
            // $nasabah = $this->user->norek($norek)->row();
            // if () {
            //     # code...
            // }

            file_get_contents($apiURL . "/sendmessage?chat_id=" . $chatID . "&text=" . $update . "<code>bprunisritama.com</code>.&parse_mode=HTML");
        }
    }
}
