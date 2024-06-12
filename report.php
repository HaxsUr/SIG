<?php
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
    <center class="report">
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
        <table  width="552">
            <tr>
                <td>
                    <font size="2">Kepada Yang Terhormat</font>
                </td>
            </tr>
        </table>
        <br>
        <table  width="552">
            <tr>
                <td>
                    <font size="2">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Molestias, dolore libero. Ut officia, 
                        cupiditate optio ipsam veritatis voluptatum quasi ea fugit asperiores rerum blanditiis reiciendis placeat 
                        maiores assumenda reprehenderit facere?
                    </font>
                </td>
            </tr>
        </table>
        <br>
        <table  width="552">
            <tr>
                <td>Hari</td>
                <td width="525">: Selasa</td>
            </tr>
            <tr>
                <td>Jam</td>
                <td width="525">: 08:30</td>
            </tr>
            <tr>
                <td>Tempat</td>
                <td width="525">: Ruang Lap</td>
            </tr>
        </table>
        <br>
        <table width="552" >
            <tr>
                <td> <font size="2">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Qui voluptatem nemo sapiente!
                     Maiores tempora iure incidunt rem perspiciatis sequi ratione tempore magnam vero obcaecati? Quia s
                     apiente aliquam id ipsum officiis!</font></td>
            </tr>
        </table>
        <br>
        <table  width="552">
            <tr>
                <td width="400"></td>
                <td style="text-align: right;font-size: 13px;" align="center"> Kepala <br><br><br><br> <?php echo $hasil['nama']?></td>
            </tr>
        </table>
        <br>
      
    </center>
    <center> 
        <table width="552">
            <tr>
                <td width="100"></td>
                <td style="text-align: center;font-size: 13px;"><button onclick="window.print()">Print</button></td>
                <td style="text-align: center;font-size: 13px;"><a href="form/cetakreport.php">Print</a></td>
            </tr>
            <?php 
            session_start();
            if($_SESSION['level']=='administrator'){ 
                echo'<tr>
                <td width="100"></td>
                <td style="text-align: center;font-size: 13px;"><a href="form/edit.php"><button style="padding: 0.4% 0.8%; background-color: #009000; color : #fff;
                border-radius: 2px; text-decoration:none;">Ubah</button></a>
                </td></tr>';
            } ?>
           
        </table>
    </center>
   
    
    <!-- <a href="form/cetakreport.php"><button>CETAK</button></a>-->
</body>
</html>