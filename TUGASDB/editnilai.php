<?php
include "koneksi.php";
$id = $_GET['id'];

$data = mysqli_query($conn, "SELECT * FROM tbl_nilai WHERE id_nilai='$id'");
$d = mysqli_fetch_array($data);
?>
<!DOCTYPE html>
<html>
<head>
    <title>Edit Nilai</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">

<div class="container mt-4" style="max-width: 700px;">
    <div class="card shadow-sm">

        <!-- HEADER WARNA GELAP -->
        <div class="card-header text-white" style="background:#24272b;">
            <h4 class="mb-0">Edit Nilai</h4>
        </div>

        <div class="card-body">

            <form action="proses_editnilai.php" method="post">

                <input type="hidden" name="id_nilai" value="<?= $d['id_nilai'] ?>">

                <div class="mb-3">
                    <label class="form-label">Nilai Angka</label>
                    <input type="text" name="nilai" value="<?= $d['nilai'] ?>" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Nilai Huruf</label>
                    <input type="text" name="nilaiHuruf" value="<?= $d['nilaiHuruf'] ?>" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Kode Matkul</label>
                    <input type="text" name="kodeMatkul" value="<?= $d['kodeMatkul'] ?>" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">NIM</label>
                    <input type="text" name="nim" value="<?= $d['nim'] ?>" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">NIDN</label>
                    <input type="text" name="nidn" value="<?= $d['nidn'] ?>" class="form-control" required>
                </div>

                <button type="submit" class="btn btn-success px-4">Simpan</button>
                <a href="viewnilai.php" class="btn btn-secondary px-4">Kembali</a>

            </form>

        </div>
    </div>
</div>

</body>
</html>