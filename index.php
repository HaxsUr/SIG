<?php 
session_start();
if(isset($_SESSION['pengguna'])){
    echo '<meta http-equiv="refresh" content="0.1; url=halaman.php">';
} else {
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
            <label>Pengguna</label>
            <input type="text" name="pengguna" class="form_login" placeholder="Nama Pengguna" autocomplete="off">
            <label>Sandi</label>
            <input type="password" name="sandi" class="form_login" placeholder="Sandi" autocomplete="off">
            <input type="submit" class="tombol_login" value="login">
        </form>
    </div>
</body>
</html>
<?php }
?>