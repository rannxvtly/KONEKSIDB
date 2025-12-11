<?php
include 'koneksi.php';
$nim = $_GET['nim'];

$q = mysqli_query($conn, "SELECT * FROM tbl_mahasiswa WHERE nim='$nim'");
$mhs = mysqli_fetch_assoc($q);
?>
<!DOCTYPE html>
<html>
<head>
    <title>Edit Mahasiswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">
<div class="container mt-5">
    <div class="card p-4 shadow">
        <h3 class="mb-4">Edit Data Mahasiswa</h3>

        <form action="proses_editmahasiswa.php" method="post">

            <div class="mb-3">
                <label class="form-label">NIM</label>
                <input type="text" name="nim" class="form-control" value="<?= $mhs['nim'] ?>" readonly>
            </div>

            <div class="mb-3">
                <label class="form-label">Nama</label>
                <input type="text" name="nama" class="form-control" value="<?= $mhs['nama'] ?>" required>
            </div>

            <div class="mb-3">
                <label class="form-label">Prodi</label>
                <select name="prodi" class="form-select">
                    <option value="TL"  <?= $mhs['prodi']=='TL'?'selected':'' ?>>Teknologi Listrik</option>
                    <option value="TRPL"<?= $mhs['prodi']=='TRPL'?'selected':'' ?>>Teknologi Rekayasa Perangkat Lunak</option>
                    <option value="TRM" <?= $mhs['prodi']=='TRM'?'selected':'' ?>>Teknologi Rekayasa Manufaktur</option>
                    <option value="TMKT"<?= $mhs['prodi']=='TMKT'?'selected':'' ?>>Teknologi Rekayasa Mekatronika</option>
                </select>
            </div>

            <div class="mb-3">
                <label class="form-label">Angkatan</label>
                <input type="text" name="angkatan" class="form-control" value="<?= $mhs['angkatan'] ?>" required>
            </div>

            <div class="mb-3">
                <label class="form-label">Email</label>
                <input type="email" name="email" class="form-control" value="<?= $mhs['email'] ?>" required>
            </div>

            <button class="btn btn-primary" type="submit">Simpan Perubahan</button>
            <a href="viewmahasiswa.php" class="btn btn-secondary">Kembali</a>
        </form>
    </div>
</div>
</body>
</html>