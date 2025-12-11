<?php
include "koneksi.php";

// Ambil NIDN dari URL
$nidn = $_GET['nidn'];

// Query ambil data dosen
$data = mysqli_query($conn, "SELECT * FROM tbl_dosen WHERE nidn='$nidn'");
$row = mysqli_fetch_array($data);

if (!$row) {
    die("Data Dosen tidak ditemukan!");
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit Data Dosen</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>

<body class="p-4">

<div class="container">
    <div class="card">

        <div class="card-header bg-dark text-white">
            <h4 class="mb-0">Edit Data Dosen</h4>
        </div>

        <div class="card-body">

            <form action="proses_editdosen.php" method="POST">

                <div class="mb-3">
                    <label class="form-label">NIDN</label>
                    <input type="text" class="form-control" value="<?= $row['nidn']; ?>" disabled>
                    <input type="hidden" name="nidn" value="<?= $row['nidn']; ?>">
                </div>

                <div class="mb-3">
                    <label class="form-label">Nama Dosen</label>
                    <input type="text" name="nama" class="form-control" 
                        value="<?= $row['nama']; ?>" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Prodi</label>
                    <select name="prodi" class="form-control" required>
                        <option value="TL"  <?= ($row['prodi'] == "TL"  ? "selected" : "") ?>>Teknologi Listrik</option>
                        <option value="TRPL"<?= ($row['prodi'] == "TRPL" ? "selected" : "") ?>>Teknologi Rekayasa Perangkat Lunak</option>
                        <option value="TRM" <?= ($row['prodi'] == "TRM" ? "selected" : "") ?>>Teknologi Rekayasa Manufaktur</option>
                        <option value="TMKT"<?= ($row['prodi'] == "TMKT" ? "selected" : "") ?>>Teknologi Rekayasa Mekatronika</option>
                    </select>
                </div>

                <button type="submit" class="btn btn-success">Simpan</button>
                <a href="viewdosen.php" class="btn btn-secondary">Kembali</a>
            </form>

        </div>

    </div>
</div>

</body>
</html>