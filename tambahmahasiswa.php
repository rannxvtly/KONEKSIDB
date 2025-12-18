<?php
include "blokmhs.php";

?>

<!DOCTYPE html>
<html>
<head>
    <title>Tambah Mahasiswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container mt-5">
    <div class="card p-4 shadow">
        <h3 class="mb-4">Form Tambah Mahasiswa</h3>

        <form action="simpanmahasiswa.php" method="post">

            <div class="mb-3">
                <label class="form-label">NIM</label>
                <input type="text" name="nim" class="form-control" required>
            </div>

            <div class="mb-3">
                <label class="form-label">Nama</label>
                <input type="text" name="nama" class="form-control" required>
            </div>

            <div class="mb-3">
                <label class="form-label">Prodi</label>
                <select name="prodi" class="form-select" required>
                    <option value="">--Pilih Prodi--</option>
                    <option value="TL">Teknologi Listrik</option>
                    <option value="TRPL">Teknologi Rekayasa Perangkat Lunak</option>
                    <option value="TRM">Teknologi Rekayasa Manufaktur</option>
                    <option value="TMKT">Teknologi Rekayasa Mekatronika</option>
                </select>
            </div>

            <div class="mb-3">
                <label class="form-label">Angkatan</label>
                <input type="text" name="angkatan" class="form-control" required>
            </div>

            <div class="mb-3">
                <label class="form-label">Email</label>
                <input type="email" name="email" class="form-control" required>
            </div>

            <button class="btn btn-primary" type="submit">Simpan</button>
            <a href="viewmahasiswa.php" class="btn btn-secondary">Kembali</a>

        </form>
    </div>
</div>

</body>
</html>