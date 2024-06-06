<?php 
include "fpdf.php";
include "koneksi.php";

$pdf = new FPDF('P', 'mm', 'A4');
$pdf -> AddPage();

$pdf -> SetFont('Arial', 'B', '8');
$pdf -> Cell(0,5, 'PT. MAJU MUNDUR SUKSES', '0', '1', 'C', false);
$pdf -> SetFont('Arial', 'i', '8');
$pdf -> Cell(0,5,'Alamat : Jl. Pelabuhan Laut No. 5 Banjarmasin Selatan', '0', '1', 'C', false);
$pdf -> SetFont('Arial', 'i', '6');
$pdf -> Cell(0,5,'Telp : (0511)335212  HP : 085345775699', '0','1','C', false);
$pdf -> Ln(3);
$pdf -> Cell(190, 0.6,'','1','C',true);

$pdf -> SetFont('Arial', 'B', '9');
$pdf -> Cell(50,5,'Laporan Data Karyawan','0','1','L',false);
$pdf -> Ln(3);

/*$pdf ->SetFont('Arial', 'B', '9');
$pdf ->Cell(8,6,'No',1,0,'C');
$pdf ->Cell(30,6,'Kode Karyawan',1,0,'C');
$pdf ->Cell(30,6,'Nama',1,0,'C');
$pdf ->Cell(30,6,'Alamat',1,0,'C');
$pdf ->Cell(30,6,'Tempat Lahir',1,0,'C');
$pdf ->Cell(30,6,'Tanggal Lahir',1,0,'C');
$pdf ->Cell(30,6,'Jenis Kelamin',1,0,'C');
$pdf -> Ln(2);
$no=1;
$sql = mysqli_query($con,"SELECT * FROM karyawan_0178");
if(mysqli_num_rows($sql) > 0){
    while($hasil = mysqli_fetch_array($sql)){
        $pdf -> Ln(4);
        $pdf ->SetFont('Arial','','7');
        $pdf ->Cell(8,4,$no++.".",1,0,'C');
        $pdf ->Cell(30,4,$hasil['kd_karyawan'].'.',1,0,'L');
        $pdf ->Cell(30,4,$hasil['Nama'].'.',1,0,'L');
        $pdf ->Cell(30,4,$hasil['Alamat'].'.',1,0,'L');
        $pdf ->Cell(30,4,$hasil['tempat_lahir'].'.',1,0,'L');
        $pdf ->Cell(30,4,$hasil['Tanggal_lahir'].'.',1,0,'L');
        $pdf ->Cell(30,4,$hasil['Jk'].'.',1,0,'L');
    }
}*/
$pdf -> Output('Laporan.pdf','I');
?>