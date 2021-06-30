<?php

$file = base_url('upload/nasabah/');
$pdf = new Pdf('P', 'mm', 'A4', true, 'UTF-8', false);
$pdf->SetTitle('eForm Rekening Tabungan - ' . strtoupper($data_nsb->nsb_nama));
$pdf->setHeaderMargin(5);
// set font
$pdf->SetFont('times', '', 11);

$pdf->SetTopMargin(25);
// $pdf->setFooterMargin(10);
$pdf->SetAutoPageBreak(true, 10);
$pdf->SetAuthor('BPR Unisritama');
$pdf->SetCreator('BPR Unisritama');
$pdf->SetSubject('eForm Bank Unisritama');
$pdf->SetKeywords('eForm, online-form');
$pdf->SetDisplayMode('real', 'default');
$pdf->SetMargins(8, 25, 8, false);
$pdf->AddPage();
$html =
    '<h2 align="center">e-Form ' . ucwords($data_nsb->produk) . '</h2><br>
<div>
<table>
<tr><td>Nama Nasabah</td><td>: ' . strtoupper($data_nsb->nsb_nama) . '</td></tr>
<tr><td>Kode Referensi</td><td>: ' . $data_nsb->kd_ref . '</td></tr>
<tr>
<td align="center">KTP:<br><img src="' . $file . $data_nsb->nsb_ktp . '" width="220px" height="140px"></td>
<td align="center">Kartu Keluarga: <img src="' . $file . $data_nsb->nsb_swafoto . '" width="220px" height="140px"></td>
</tr>
<tr><td colspan="2" align="right">Pekanbaru, ' .  tanggal(date("Y-m-d")) . '</td></tr>
<tr><th height="70px"></th></tr>
</table>
<div align="center">
<table style="width:100%">
<tr><th>-&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-</th>
<th>-&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-</th>
<th>-&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-</th></tr>
<tr><th>( Customer Service )</th><th>( Supervisor )</th><th>( Nasabah )</th></tr>
</table></div>';
// echo $html;
// die;
$pdf->writeHTML($html, true, false, true, false, '');
$pdf->Output('e-Form ' . $data_nsb->nsb_nama . '.pdf', 'I');
