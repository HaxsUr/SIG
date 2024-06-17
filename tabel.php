<?php
require 'koneksi.php';
session_start();
?>
<!DOCTYPE html>
<html lang="en">
    <head>
    <meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>Halaman Utama SIG</title>
    <link rel='stylesheet' href='halaman.css'>
    <link rel="stylesheet" href="tabel.css">
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
                    <a href=''>
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
            </div><br>
            <main>
                <div>
                    <h1>Data FASUM Wilayah KABUPATEN BARITO KUALA</h1>
                    <div>
                        <div>
                            Tabel Informasi FASUM
                        </div> <br>
                        <div>
                            <table>
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama</th>
                                        <th>Jenis</th>
                                        <th>Alamat</th>
                                        <th>Latitude</th>
                                        <th>Longitude</th>
                                        <th>Edit</th>
                                        <th>Hapus</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php
                                    $sql = "SELECT * FROM tanda";
                                    $result = $conn->query($sql);
                                    if ($result->num_rows > 0) {
                                        $no = 1;
                                        while($row = $result->fetch_assoc()) {
                                            echo "<tr>";
                                            echo "<td>" . $no++ . "</td>";
                                            echo "<td>" . $row['nama'] . "</td>";
                                            echo "<td>" . $row['jenis'] . "</td>";
                                            echo "<td>" . $row['alamat'] . "</td>";
                                            echo "<td>" . $row['latitude'] . "</td>";
                                            echo "<td>" . $row['longitude'] . "</td>";
                                            if($_SESSION['tingkatan']=='administrator'){ 
                                            echo "<td><a href='editdata.php?alamat=" . $row['alamat'] . "' style='padding: 0.4% 0.8%; background-color: #009900; color: #fff;
                                            border-radius: 2px; text-decoration: none; '>Edit</a></td>";
                                            echo "<td><a href='hapusdata.php?alamat=" . $row['alamat'] . "' style='padding: 0.4% 0.8%; background-color: #009900; color: #fff;
                                            border-radius: 2px; text-decoration: none; ' onclick='return confirm(\"Apakah Anda yakin ingin menghapus data ini?\")'>Hapus</a></td>";
                                            echo "</tr>";}
                                        }   
                                    } else {
                                        echo "<tr><td colspan='8'>Tidak ada data</td></tr>";
                                    }
                                ?>
                                </tbody>
                            </table><br></br>
                            <a href="peta/marker.php" style="padding: 0.4% 0.8%; background-color: #009900; color: #fff;
                                border-radius: 2px; text-decoration: none; ">Tambah Data</a>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>
    <script src='script2.js'></script>
</body>
</html>
