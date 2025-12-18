<?php
include "blokmhs.php";
?>

<!DOCTYPE html>
<html>
<head>
    <title>Tambah Nilai</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">

<div class="container mt-5" style="max-width: 600px;">
    <div class="card shadow">
        <div class="card-header bg-success text-white">
            <h4 class="mb-0">Tambah Nilai</h4>
        </div>

        <div class="card-body">

            <form action="simpannilai.php" method="post">

                <div class="mb-3">
                    <label class="form-label">Nilai Angka</label>
                    <input type="text" name="nilai" class="form-control">
                </div>

                <div class="mb-3">
                    <label class="form-label">Nilai Huruf</label>
                    <input type="text" name="nilaiHuruf" class="form-control">
                </div>

                <div class="mb-3">
                    <label class="form-label">Kode Matkul</label>
                    <input type="text" name="kodeMatkul" class="form-control">
                </div>

                <div class="mb-3">
                    <label class="form-label">NIM</label>
                    <input type="text" name="nim" class="form-control">
                </div>

                <div class="mb-3">
                    <label class="form-label">NIDN</label>
                    <input type="text" name="nidn" class="form-control">
                </div>

                <button type="submit" class="btn btn-success">Simpan</button>
                <a href="viewnilai.php" class="btn btn-secondary">Kembali</a>

            </form>
        </div>
    </div>
</div>

</body>
</html>