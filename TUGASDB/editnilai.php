<?php 
include "koneksi.php";

$id = $_GET['id'];
$data = mysqli_query($conn, 
    "SELECT * FROM tbl_nilai WHERE idNilai='$id'");
$n = mysqli_fetch_assoc($data);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit Nilai</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body class="p-4">

<h2 class="mb-4">Edit Nilai Mahasiswa</h2>

<form action="proses_editnilai.php" method="POST" class="col-md-6">

    <input type="hidden" name="idNilai" value="<?= $n['idNilai']; ?>">

    <div class="mb-3">
        <label>Mahasiswa</label>
        <select name="idMhs" class="form-control" required>
            <?php
            $mhs = mysqli_query($conn, "SELECT * FROM tbl_mahasiswa ORDER BY nama ASC");
            while ($m = mysqli_fetch_array($mhs)){
                $selected = ($m['idMhs'] == $n['idMhs']) ? "selected" : "";
                echo "<option value='$m[idMhs]' $selected>$m[nama] - $m[nim]</option>";
            }
            ?>
        </select>
    </div>

    <div class="mb-3">
        <label>Mata Kuliah</label>
        <select name="idMatkul" class="form-control" required>
            <?php
            $matkul = mysqli_query($conn, "SELECT * FROM tbl_matkul ORDER BY namaMatkul ASC");
            while ($mt = mysqli_fetch_array($matkul)){
                $selected = ($mt['idMatkul'] == $n['idMatkul']) ? "selected" : "";
                echo "<option value='$mt[idMatkul]' $selected>$mt[namaMatkul]</option>";
            }
            ?>
        </select>
    </div>

    <div class="mb-3">
        <label>Nilai</label>
        <input type="number" name="nilai" value="<?= $n['nilai']; ?>" 
               class="form-control" min="0" max="100" required>
    </div>

    <button type="submit" class="btn btn-primary">Simpan</button>
    <a href="viewnilai.php" class="btn btn-secondary">Kembali</a>

</form>

</body>
</html>