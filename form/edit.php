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
                <td>Nama Kepala</td>
                <td>:</td>
                <td><input type="text" name="nama" value="<?php $hasil['nama'] ?>" required></td>
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
        $update = mysqli_query($conn, "UPDATE kepala SET nama = '".$_POST['nama']."'");
    }
    ?><br>
    <a href="../report.php" style="padding: 0.4% 0.8%; background-color: #009000; color : #fff;
        border-radius: 2px; text-decoration:none;">Kembali</a><br><br>
</body>
</html>