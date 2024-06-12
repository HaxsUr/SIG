<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data Tempat</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1>Tambah Data Tempat</h1>
        <form id="formTambahData" action="prosestambahdata.php" method="POST">
            <div class="mb-3">
                <label for="nama" class="form-label">Nama Tempat</label>
                <input type="text" class="form-control" id="nama" name="nama" required>
            </div>
            <div class="mb-3">
                <label for="jenis" class="form-label">Jenis</label>
                <input type="text" class="form-control" id="jenis" name="jenis" required>
            </div>
            <div class="mb-3">
                <label for="alamat" class="form-label">Alamat</label>
                <input type="text" class="form-control" id="alamat" name="alamat" required>
            </div>
            <div class="mb-3">
                <label for="latitude" class="form-label">Latitude</label>
                <input type="text" class="form-control" id="latitude" name="latitude" required>
            </div>
            <div class="mb-3">
                <label for="longitude" class="form-label">Longitude</label>
                <input type="text" class="form-control" id="longitude" name="longitude" required>
            </div>
            <button type="submit" class="btn btn-primary">Tambah Data</button>
        </form>
        <!-- Penambahan pesan keberhasilan atau kegagalan -->
        <?php
        if (isset($_GET['success']) && $_GET['success'] == 'true') {
            echo '<div class="alert alert-success mt-3" role="alert">Data berhasil ditambahkan!</div>';
        } elseif (isset($_GET['success']) && $_GET['success'] == 'false') {
            echo '<div class="alert alert-danger mt-3" role="alert">Gagal menambahkan data. Silakan coba lagi.</div>';
        }
        ?>
    </div>
</body>
</html>
