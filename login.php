

<?php 
    include 'koneksi.php';

    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = mysqli_query($con, "SELECT * FROM tblogin WHERE username = '".$username."' AND password = '".$password."'");
    $row = mysqli_fetch_array($sql);
   if($row){
        session_start();
        $_SESSION['user']=$row['username'];
        $_SESSION['level']=$row['level'];
        header("location: halaman.php");
    } 
    if(mysqli_num_rows($sql) == 0){
        echo '<script>alert("Username dan Password Salah, Silahkan Login Kembali."); document.location="index.php";</script>';
    } else{
        echo '<script>alert("Anda Berhasil Login."); document.location="halaman.php";</script>';
    }

?>
