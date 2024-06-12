<?php
// Pastikan file koneksi.php sudah di-include di sini
require 'koneksi.php';

// Ambil koordinat yang dikirimkan dari frontend (JavaScript)
$alamat = $_GET['alamat'];

// Query untuk menghapus data dari database berdasarkan koordinat
$sql = "DELETE FROM tanda WHERE alamat='$alamat' ";

if ($conn->query($sql) === TRUE) {
    // Jika data berhasil dihapus, kembali ke halaman peta.php
    header("Location: tabel.php");
    exit();
} else {
    // Jika terjadi kesalahan, tampilkan pesan error
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Tutup koneksi database
$conn->close();
?>