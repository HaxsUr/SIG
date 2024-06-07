<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "sig";
 
$conn = mysqli_connect($servername, $username, $password, $database);
if(!$conn){
    die("Koneksi Gagal: ". mysqli_connect_error());
}
?>