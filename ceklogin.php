

<?php 
    include 'koneksi.php';

    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = mysqli_query($con, "SELECT * FROM tb_login WHERE username = '".$username."' AND password = '".$password."'");

    if(mysqli_num_rows($sql) == 0){
        echo '<script>alert("Username dan Password Salah, Silahkan Login Kembali."); document.location="login.php";</script>';
    } else{
        echo '<script>alert("Anda Berhasil Login."); document.location="halaman.php";</script>';
    }
?>
