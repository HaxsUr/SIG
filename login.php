<?php 
    include 'koneksi.php';

    $pengguna = $_POST['pengguna'];
    $sandi = $_POST['sandi'];

    $sql = mysqli_query($conn, "SELECT * FROM tblogin WHERE pengguna = '$pengguna' AND sandi = '$sandi'");
    $row = mysqli_fetch_array($sql);
   if($row){
        session_start();
        $_SESSION['pengguna']=$row['pengguna'];
        $_SESSION['tingkatan']=$row['tingkatan'];
        header("location: halaman.php");
    } 
    if(mysqli_num_rows($sql) == 0){
        echo '<script>alert("Nama Pengguna dan Sandi Salah, Silahkan Login Kembali."); document.location="index.php";</script>';
    } else{
        echo '<script>alert("Anda Berhasil Login."); document.location="halaman.php";</script>';
    }

?>