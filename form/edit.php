<?php 
include '../koneksi.php';
$data_edit = mysqli_query($conn, "SELECT * FROM kepala");
$hasil =  mysqli_fetch_array($data_edit);
?>
<!DOCTYPE html>
<head>
    <title>Halaman Edit Data</title>
</head>
<body>
    <h2>Edit Data Kepala</h2>
<form action="" method="post">
        <table>
            <tr>
                <td>NIPN</td>
                <td>:</td>
                <td><input type="text" name="nip" value="<?php $hasil['nip'] ?>" ></td>
            </tr>
            <tr>
                <td>Nama Kepala</td>
                <td>:</td>
                <td><input type="text" name="nama" value="<?php $hasil['nama'] ?>" ></td>
            </tr>
            <tr>
                <td>Jabatan</td>
                <td>:</td>
                <td><input type="text" name="jabatan" value="<?php $hasil['jabatan'] ?>" ></td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td>:</td>
                <td><input type="text" name="alamat" value="<?php $hasil['alamat'] ?>" ></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td><input type="submit" name="edit" value="simpan"></td>
            </tr>
        </table>
    </form>
    <?php 
    if(isset($_POST['edit'])){
        $update = mysqli_query($conn, "UPDATE kepala SET nip = '".$_POST['nip']."', nama ='".$_POST['nama']."',jabatan = '".$_POST['jabatan']."', alamat = '".$_POST['alamat']."'");
    }
    ?><br>
    <a href="../kantor.php" style="padding: 0.4% 0.8%; background-color: #009000; color : #fff;
        border-radius: 2px; text-decoration:none;">Kembali</a><br><br>
</body>
</html>