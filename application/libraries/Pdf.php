<?php
defined('BASEPATH') or exit('No direct script access allowed');
require_once dirname(__FILE__) . '/TCPDF-6.3.5/tcpdf.php';
class Pdf extends TCPDF
{

    public function __construct()
    {
        parent::__construct();
        //Do your magic here
    }

    //Page header
    public function Header()
    {
        // Logo
        $image_file = base_url('assets/img/logo/logo-bpr.png');
        $this->Image($image_file, 10, 2, 19, '', 'PNG', '', 'M', false, 300, '', false, false, 0, false, false, false);
        // Set font
        $this->SetFont('times', 'B', 20);
        // Title
        $this->MultiCell(0, 0, 'PT. BPR UNISRITAMA', 0, 'L', 0, 1, 30, 1, true, 0, false, true, 25, 'T');
        $this->SetFont('times', '', 11);
        $this->MultiCell(0, 0, 'Jl. Soekarno-Hatta No. 3, Desa Kubang Jaya, Kec. Siak Hulu - Kampar', 0, 'L', 0, 1, 30, 8, true, 1, false, true, 0, 'T');
        $this->MultiCell(0, 0, 'Telp : (0761) 63381 / Fax : (0761) 63696', 0, 'L', 0, 1, 30, 12, true, 1, false, true, 0, 'T');
        $this->MultiCell(0, 0, 'Email : unisritamabpr@yahoo.co.id', 0, 'L', 0, 1, 30, 16, true, 1, false, true, 0, 'T');
        $this->Ln(1);
        $this->writeHTML('<hr>', true, false, false, false, '');
    }

    // Page footer
    public function Footer()
    {
        // Position at 15 mm from bottom
        $this->SetY(-9);
        // Set font
        $this->SetFont('dejavusans', 'B', 8);
        // Page number
        $this->writeHTML('<hr>', true, false, false, false, '');
        $this->MultiCell(0, 10, 'Page ' . $this->getAliasNumPage() . '/' . $this->getAliasNbPages(), 0, 'C', 0, 1, 40, -5, true, 1, false, true, 20, 'T', true);
        $this->MultiCell(0, 10, 'e-Form Pembukaan Rekening - Bank Unisritama | Generated by www.bprunisritama.com', 0, 'C', 0, 1, '', -9, true, 0, false, true, 20, 'T');
    }
}
