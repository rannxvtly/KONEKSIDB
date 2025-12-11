<?php 
include "koneksi.php"; 
$kode = $_GET['kodeMatkul'];
$data = mysqli_query($conn, "SELECT * FROM tbl_matkul WHERE kodeMatkul='$kode'");
$row = mysqli_fetch_assoc($data);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit Mata Kuliah</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>

<body class="p-4">

<div class="container">
    <div class="card">

        <div class="card-header bg-dark text-white">
            <h4 class="mb-0">Edit Data Mata Kuliah</h4>
        </div>

        <div class="card-body">

            <form action="proses_editmatkul.php" method="POST">

                <div class="mb-3">
                    <label class="form-label">Kode Matkul</label>
                    <input type="text" class="form-control" value="<?= $row['kodeMatkul']; ?>" disabled>
                    <input type="hidden" name="kodeMatkul" value="<?= $row['kodeMatkul']; ?>">
                </div>

                <div class="mb-3">
                    <label class="form-label">Nama Mata Kuliah</label>
                    <input type="text" name="namaMatkul" class="form-control" 
                        value="<?= $row['namaMatkul']; ?>" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">SKS</label>
                    <input type="number" name="sks" min="1" max="6" class="form-control" 
                        value="<?= $row['sks']; ?>" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Dosen Pengampu</label>
                    <select name="nidn" class="form-control" required>
                        <?php
                        $dosen = mysqli_query($conn, "SELECT * FROM tbl_dosen ORDER BY nama ASC");
                        while($d = mysqli_fetch_array($dosen)){
                            $selected = ($d['nidn'] == $row['nidn']) ? "selected" : "";
                            echo "<option value='$d[nidn]' $selected>$d[nama]</option>";
                        }
                        ?>
                    </select>
                </div>

                <button type="submit" class="btn btn-success">Simpan</button>
                <a href="viewmatkul.php" class="btn btn-secondary">Kembali</a>

            </form>

        </div>

    </div>
</div>

</body>
</html>
