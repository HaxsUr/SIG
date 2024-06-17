<?php
session_start();
include "koneksi.php";

$nama = mysqli_query($conn, "SELECT * FROM kepala");
$hasil = mysqli_fetch_array($nama);
?>
<!DOCTYPE html>
<head>
    <title>Report</title>
    <link rel="stylesheet" href="halaman.css">
</head>
<body>
<div class='container'>
        <div class='sidebar'>
            <div class='header'>
                    <div class='list-item'>
                            <img src='assets/iconUtama.png' alt='' class='iconUtama'>
                            <span class='description-header'>WEB GIS</span>
                    </div>
            </div>
            
            <div class='main'>
                <div class='list-item'>
                    <a href='halaman.php'>
                        <img src='assets/iconBeranda.png' alt='' class='icon'>
                        <span class='description'>BERANDA</span>
                    </a>
                </div>
                <div class='list-item'>
                    <a href='#'>
                        <img src='assets/iconUser.png' alt='' class='icon'>
                        <span class='description'>PENGGUNA</span>
                    </a>
                </div>
                
                <div class='list-item'>
                    <a href='tabel.php'>
                        <img src='assets/iconKab.png' alt='' class='icon'>
                        <span class='description'>KABUPATEN</span>
                    </a>
                </div>
                <div class='list-item'>
                    <a href='peta/peta.php'>
                        <img src='assets/iconPeta.png' alt='' class='icon'>
                        <span class='description'>PETA</span>
                    </a>
                </div>
                <div class='list-item'>
                    <a href='peta/marker.php'>
                        <img src='assets/iconTanda.png' alt='' class='icon'>
                        <span class='description'>TANDA</span>
                    </a>
                </div>
                <div class='list-item'>
                    <a href='kantor.php'>
                        <img src='assets/iconKantor.png' alt='' class='icon'>
                        <span class='description'>KANTOR</span>
                    </a>
                </div>
                <div class='list-item'>
                    <a href='form/cetakreport.php'>
                        <img src='assets/iconReport.png' alt='' class='icon'>
                        <span class='description'>LAPORAN</span>
                    </a>
                </div>
                <div class='list-item'>
                    <a href='logout.php'>
                        <img src='assets/iconLogout.png' alt='' class='icon'>
                        <span class='description'>KELUAR</span>
                    </a>
                </div>
            </div>
        </div>

        <div class='main-content'>
            <div id='menu-button'>
                <input type='checkbox' id='menu-checkbox'>
                <label for='menu-checkbox' id='menu-label'>
                    <div id='garis-3'></div>
                </label>
            </div>
            <div>
            <center class="">
        <table >
            <tr>
                <td><img src="assets/logokabupaten.png" alt="" width="90" height="90"></td>
                <td>
                    <center>
                        <font size="4"><b>LEMBAGA PEMERINTAH DAERAH BARITO KUALA</b></font><br>
                        <font size="2">Jl.Aneka Tambang No. Telp 0511-5770001, 4770002 No Fax 0511-4770009, 4770008</font><br>
                    </center>
                </td>
            </tr>
            <tr>
                <td colspan="2"><hr></td>
            </tr>
        </table>
        <table  width="552">
            <tr>
                <td style="text-align: right;font-size: 13px;">Barito Kuala, 20 Mei 2024</td>
            </tr>
        </table>
        <br>
        <table  width="552">
            <tr>
                <td>Nomor</td>
                <td width="572">: -</td>
            </tr>
            <tr> 
            <td>Perihal</td>
                <td width="572">: -</td>
            </tr>
        </table>
        <br>
        <table  width="452">
            <tr>
                <td>
                    <font size="2">Kepada Yth. Bapak/Ibu</font>
                </td>
            </tr>
            <tr>
                <td>
                    <font size="2">Ditempat</font>
                </td>
            </tr>
        </table>
        <table width="552">
            <tr>
                <td>
                    <font size="2">Assalamualikum Wr. Wb.</font>
                </td>
            </tr>
        </table>
        <table  width="552" >
            <tr>
                <td>
                    <font size="2">Yang bertanda tangan di bawah ini, Gubernur Barito Kuala, 
                        Ibu Kota Marabahan, Kecamatan Alalak Kelapa Gading, Desa Berangas Timur Menerangka Dengan Surat Fasilitas Umum Bahwa:
                    </font>
                </td>
            </tr>
        </table>
        <br>
        <table  width="552">
            
            <tr>
                <td><font size="2">Nama</font></td>
                <td width="525"><font size="2">: <?php echo $hasil['nama']?></font> </td>
            </tr>
            <tr>
                <td><font size="2">Jabatan</font></td>
                <td width="525"><font size="2">: <?php echo $hasil['jabatan']?></font></td>
            </tr>
            <tr>
                <td><font size="2">Alamat</font></td>
                <td width="525"><font size="2">: <?php echo $hasil['alamat']?></font> </td>
            </tr>
        </table>
        <br>
        <table width="552" >
            <tr>
                <td> <font size="2">1. Mesjid yang berlokasi di wilayah desa berangas timur yang menjadi perencanaan peningkatan kualitas jalur
                     program Program Pembaharuan Mesjid tahun 2024 merupakan fasilitas umum milik desa. <br>
                    2. Selaku Pemerintah Kota Mengizinkan melakukan peningkatan infrastruktur Mesjid dengan Konstruksi Alat Berat. <br>
                    3. Pembangunan Pembaharun Mesjid telah melalui asistensi tegas.</font></td>
            </tr>
        </table>
        <br><br><br><br>
        <table  width="552">
            <tr>
                <td width="400"></td>
                <td style="text-align: right;font-size: 13px;" align="center"> Kepala <br><br><br><br> <?php echo $hasil['nama']?> <br><br>NIPN. <?php echo $hasil['nip']?></td>
            </tr>
        </table>
        <br>
      
    </center>
    <center> 
        <table width="552">
            <?php 
            if($_SESSION['tingkatan']=='administrator'){ 
                echo'<tr>
                <td width="100"></td>
                <td style="text-align: center;font-size: 13px;"><a href="form/edit.php"><button style="padding: 0.4% 0.8%; background-color: #009000; color : #fff;
                border-radius: 2px; text-decoration:none;">Ubah</button></a>
                </td></tr>';
            } ?>
           
        </table>
    </center>
            </div>
        </div>
    </div>
    <script src='script2.js'></script>
    
</body>
</html>