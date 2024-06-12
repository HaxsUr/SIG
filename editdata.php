<?php 
include 'koneksi.php';

// Pastikan mendapatkan alamat dari URL
$data_edit = mysqli_query($conn, "SELECT * FROM tanda");
$hasil =  mysqli_fetch_array($data_edit);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Edit Data</title>
</head>
<body>
    <h2>Edit Data Jenis</h2>
    <form action="" method="post">
        <table>
            <tr>
                <td>Nama Tempat</td>
                <td>:</td>
                <td><input type="text" name="nama" value="<?php echo $hasil['nama']; ?>" required></td>
            </tr>
            <tr>
                <td>Jenis</td>
                <td>:</td>
                <td><input type="text" name="jenis" value="<?php echo $hasil['jenis']; ?>" required></td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td>:</td>
                <td><input type="text" name="alamat" value="<?php echo $hasil['alamat']; ?>" required></td>
            </tr>
            <tr>
                <td>Latitude</td>
                <td>:</td>
                <td><input type="text" name="latitude" value="<?php echo $hasil['latitude']; ?>" required></td>
            </tr>
            <tr>
                <td>Longitude</td>
                <td>:</td>
                <td><input type="text" name="longitude" value="<?php echo $hasil['longitude']; ?>" required></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" name="edit" value="Simpan"></td>
            </tr>
        </table>
        <a href="tabel.php" style="padding: 0.4% 0.8%; background-color: #009900; color: #fff; border-radius: 2px; text-decoration: none;">Kembali</a>
    </form>
    
    <?php 
    if(isset($_POST['edit'])){
        $update = mysqli_query($conn, "UPDATE tanda SET nama = '".$_POST['nama']."',
            jenis ='".$_POST['jenis']."', alamat = '".$_POST['alamat']."', latitude = '".$_POST['latitude']."',
                longitude = '".$_POST['longitude']."'"); 
        }
    ?>
</body>
</html>