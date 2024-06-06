<?php 
/*session_start();
if($_SESSION['level'] !='kepala'){

}
if($_SESSION['level'] !='administrator'){

}
*/?> 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Utama SIG</title>
    <link rel="stylesheet" href="halaman.css">
</head>
<body>
    <div class="container">

    
        <div class="sidebar">
            <div class="header">
                    <div class="list-item">
                            <img src="assets/iconUtama.png" alt="" class="iconUtama">
                            <span class="description-header">WEB GIS</span>
                    </div>
            </div>
            
            <div class="main">
                <div class="list-item">
                    <a href="halaman.php">
                        <img src="assets/iconBeranda.png" alt="" class="icon">
                        <span class="description">BERANDA</span>
                    </a>
                </div>
                <div class="list-item">
                    <a href="#">
                        <img src="assets/iconUser.png" alt="" class="icon">
                        <span class="description">PENGGUNA</span>
                    </a>
                </div>
                
                <div class="list-item">
                    <a href="#">
                        <img src="assets/iconKab.png" alt="" class="icon">
                        <span class="description">KABUPATEN</span>
                    </a>
                </div>
                <div class="list-item">
                    <a href="#">
                        <img src="assets/iconPeta.png" alt="" class="icon">
                        <span class="description">PETA</span>
                    </a>
                </div>
                <div class="list-item">
                    <a href="#">
                        <img src="assets/iconTanda.png" alt="" class="icon">
                        <span class="description">TANDA</span>
                    </a>
                </div>
                <div class="list-item">
                    <a href="#">
                        <img src="assets/iconKantor.png" alt="" class="icon">
                        <span class="description">KANTOR</span>
                    </a>
                </div>
                <div class="list-item">
                    <a href="report.php">
                        <img src="assets/iconReport.png" alt="" class="icon">
                        <span class="description">REPORT</span>
                    </a>
                </div>
                <div class="list-item">
                    <a href="logout.php">
                        <img src="assets/iconLogout.png" alt="" class="icon">
                        <span class="description">LOGOUT</span>
                    </a>
                </div>
            </div>
        </div>

        <div class="main-content">
            <div id="menu-button">
                <input type="checkbox" id="menu-checkbox">
                <label for="menu-checkbox" id="menu-label">
                    <div id="garis-3"></div>
                </label>
            </div>
            <span></span>
        </div>
    </div>
    <script src="script.js"></script>
</body>
</html>