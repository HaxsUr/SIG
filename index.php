<?php 
/*session_start();
include 'koneksi.php';
if ($_SESSION['level']!=''){
    header("location: halaman.php");
}*/
?>

<!DOCTYPE html>
<head>
    <title>FORM LOGIN SIG</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <div class="kotak_login">
        <p class="tulisan_login">Silahkan Login</p>
        <form action="login.php" method="post" role="form">
            <label>Username</label>
            <input type="text" name="user" class="form_login" placeholder="Username" autocomplete="off">
            <label>Password</label>
            <input type="password" name="pass" class="form_login" placeholder="Password" autocomplete="off">
            <input type="submit" class="tombol_login" value="login">
        </form>
    </div>
</body>
</html>
