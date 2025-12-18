<?php include "koneksi.php";
include "blokmhs.php"; ?>
<!DOCTYPE html>
<html>
<head>
    <title>Tambah Dosen</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body>

<div class="container mt-4">
    <div class="card">

        <div class="card-header bg-dark text-white">
            <h4 class="mb-0">Tambah Data Dosen</h4>
        </div>

        <div class="card-body">

            <form action="simpandosen.php" method="POST" class="w-50">

                <div class="mb-3">
                    <label class="form-label">NIDN</label>
                    <input type="text" name="nidn" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Nama Dosen</label>
                    <input type="text" name="nama" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Prodi</label>
                    <input type="text" name="prodi" class="form-control" required>
                </div>

                <button class="btn btn-primary">Simpan</button>
                <a href="viewdosen.php" class="btn btn-secondary">Kembali</a>

            </form>

        </div>

    </div>
</div>

</body>
</html>