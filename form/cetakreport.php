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
$pdf->SetFont('Arial','',12);
$pdf->Cell(0,10,'Barito Kuala, 20 Mei 2024',0,1,'R');
$pdf->Ln(2); 

$pdf->SetFont('Arial','',12);
$pdf->Cell(0,1,'Nomor :-',0,1,'L');
$pdf->Cell(0,10,'Perihal :-',0,1,'L');
$pdf->Cell(0,20,'Kepada Yang Terhormat',0,1,'L');
$pdf->Cell(190,3.5,'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Molestias, dolore libero. Ut officia, 
cupiditate',0,1,'L');
$pdf->Cell(190,3.5,'optio ipsam veritatis voluptatum quasi ea fugit asperiores rerum blanditiis reiciendis placeat 
maiores',0,1,'L');
$pdf->Cell(190,3.5,'assumenda reprehenderit facere?',0,1,'L');
$pdf->Line(10, 40, 200, 40);
$pdf->Ln(10);

$pdf->SetFont('Arial','',12);
$pdf->Cell(0,1,'Hari       : Selasa',0,1,'L');
$pdf->Cell(0,10,'Jam       : 8.30',0,1,'L');
$pdf->Cell(0,1,'Tempat  : Ruang Lap',0,1,'L');
$pdf->Line(10, 40, 200, 40);
$pdf->Ln(10);
$pdf->Cell(190,3.5,'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Molestias, dolore libero. Ut officia, 
cupiditate',0,1,'L');
$pdf->Cell(190,3.5,'optio ipsam veritatis voluptatum quasi ea fugit asperiores rerum blanditiis reiciendis placeat 
maiores',0,1,'L');
$pdf->Cell(190,3.5,'assumenda reprehenderit facere?',0,1,'L');
$pdf->Line(10, 40, 200, 40);

$pdf->Ln(80);

$pdf->SetFont('Arial','',12);
$pdf->Cell(0,10,'Barito Kuala ',0,1,'R');
$pdf->Cell(0,10,'Kepala Instansi',0,1,'R');
$pdf->Ln(20);
$pdf->Cell(0,10,''.$hasil['nama'],0,1,'R');
// Output PDF ke browser
$pdf->Output('Laporan-Komoditas-Barito Kuala.pdf', 'I');
?>
