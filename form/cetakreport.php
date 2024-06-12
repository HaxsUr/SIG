<?php
include '../koneksi.php';
require('fontdanfpdf/fpdf.php');
$nama = mysqli_query($conn, "SELECT * FROM kepala");
$hasil = mysqli_fetch_array($nama);

// Instansiasi objek FPDF
$pdf = new FPDF();
$pdf->AddPage();

// Tambahkan logo
if (file_exists('logo.png')) { // Menggunakan file PNG
    $pdf->Image('logo.png', 10, 10, 15);
} else {
    $pdf->SetFont('Arial', 'B', 12);
    $pdf->Cell(0, 10, 'Logo tidak ditemukan', 0, 1, 'C');
}

// Tambahkan judul
$pdf->SetFont('Arial','B',16);
$pdf->Cell(0,10,'LEMBAGA PEMERINTAH DAERAH BARITO KUALA',0,1,'C');
$pdf->SetFont('Arial','',12);
$pdf->Cell(0,5,'Jl.Aneka Tambang No. Telp 0511-5770001, 4770002 No Fax 0511-4770009, 4770008',0,1,'C');
$pdf->Line(10, 40, 200, 40);
$pdf->Ln(15);
// Spasi antara judul dan ISI

// ISI
$pdf->SetFont('Arial','',9);
$pdf->Cell(0,10,'Barito Kuala, 20 Mei 2024',0,1,'R');
$pdf->Ln(2); 

$pdf->SetFont('Arial','',10);
$pdf->Cell(0,1,'Nomor :-',0,1,'L');
$pdf->Cell(0,10,'Perihal :-',0,1,'L');
$pdf->Cell(0,7,'                        Kepada Yth. Bapak/Ibu',0,1,'L');
$pdf->Cell(0,10,'                        Ditempat',0,1,'L');
$pdf->Cell(0,9,'Assalamualaikum Wr. Wb.',0,1,'L');
$pdf->Cell(190,3.5,'   Yang bertanda tangan di bawah ini, Gubernur Barito Kuala, 
Ibu Kota Marabahan, Kecamatan Alalak Kelapa Gading,',0,1,'L');
$pdf->Cell(190,4.5,'Desa Berangas Timur Menerangka Dengan Surat Fasilitas Umum Bahwa:',0,1,'L'); 
$pdf->Line(10, 40, 200, 40);
$pdf->Ln(10);

$pdf->SetFont('Arial','',10);
$pdf->Cell(0,1,'Nama       : '.$hasil['nama'],0,1,'L');
$pdf->Cell(0,10,'Jabatan    : Ketua',0,1,'L');
$pdf->Cell(0,1,'Alamat      : ',0,1,'L');
$pdf->Line(10, 40, 200, 40);
$pdf->Ln(10);
$pdf->Cell(190,4.5,'1. Mesjid yang berlokasi di wilayah desa berangas timur yang menjadi perencanaan peningkatan kualitas jalur
program ',0,1,'L');
$pdf->Cell(190,4.5,'Program Pembaharuan Mesjid tahun 2024 merupakan fasilitas umum milik desa.',0,1,'L');
$pdf->Cell(190,4.5,'2. Selaku Pemerintah Kota Mengizinkan melakukan peningkatan infrastruktur Mesjid dengan Konstruksi Alat Berat.',0,1,'L');
$pdf->Cell(190,4.5,'3. Pembangunan Pembaharun Mesjid telah melalui asistensi tegas.',0,1,'L');
$pdf->Line(10, 40, 200, 40);

$pdf->Ln(75);

$pdf->SetFont('Arial','',10);
$pdf->Cell(0,10,'Barito Kuala ',0,1,'R');
$pdf->Cell(0,10,'Kepala Instansi',0,1,'R');
$pdf->Ln(20);
$pdf->Cell(0,10,''.$hasil['nama'],0,1,'R');
// Output PDF ke browser
$pdf->Output('Laporan-Komoditas-Barito Kuala.pdf', 'I');
?>
