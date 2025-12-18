<?php 

include "koneksi.php"; 
include "blokmhs.php";  ?>

<!DOCTYPE html>
<html>
<head>
    <title>Tambah Mata Kuliah</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body class="bg-light p-4">

<div class="container mt-5">
    <div class="card col-md-6 mx-auto shadow">

        <div class="card-header bg-dark text-white">
            <h4 class="mb-0">Tambah Mata Kuliah</h4>
        </div>

        <div class="card-body">

            <form action="simpanmatkul.php" method="POST">

                <div class="mb-3">
                    <label class="form-label">Kode Mata Kuliah</label>
                    <input type="text" name="kodeMatkul" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Nama Mata Kuliah</label>
                    <input type="text" name="namaMatkul" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">SKS</label>
                    <input type="number" name="sks" class="form-control" min="1" max="6" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Dosen Pengampu</label>
                    <select name="nidn" class="form-select" required>
                        <option value="">-- Pilih Dosen --</option>
                        <?php
                        $dosen = mysqli_query($conn, "SELECT * FROM tbl_dosen ORDER BY nama ASC");
                        while($d = mysqli_fetch_array($dosen)){
                            echo "<option value='$d[nidn]'>$d[nama]</option>";
                        }
                        ?>
                    </select>
                </div>

                <button type="submit" class="btn btn-primary">Simpan</button>
                <a href="viewmatkul.php" class="btn btn-secondary">Kembali</a>

            </form>

        </div>

    </div>
</div>

</body>
</html>