<?php
// Pastikan file koneksi.php sudah di-include di sini
require '../koneksi.php';

// Ambil data yang dikirimkan dari form
$nama_tempat = $_POST['nama'];
$jenis = $_POST['jenis'];
$alamat = $_POST['alamat'];
$latitude = $_POST['latitude'];
$longitude = $_POST['longitude'];

// Query untuk menambahkan data ke database
$sql = "INSERT INTO tanda (nama, jenis, alamat, latitude, longitude) VALUES ('$nama_tempat', '$jenis', '$alamat', '$latitude', '$longitude')";

if ($conn->query($sql) === TRUE) {
    // Jika data berhasil ditambahkan, redirect ke halaman utama atau tampilan yang diinginkan
    header("Location: peta.php");
    exit();
} else {
    // Jika terjadi kesalahan, tampilkan pesan error
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Tutup koneksi database
$conn->close();
?>
