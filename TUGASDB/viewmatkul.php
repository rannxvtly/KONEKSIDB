<?php include "koneksi.php"; ?>
<!DOCTYPE html>
<html>
<head>
    <title>Data Mata Kuliah</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body class="p-4">

<h2 class="mb-4">Data Mata Kuliah</h2>

<table class="table table-bordered table-striped">
    <thead class="table-dark">
        <tr>
            <th>Kode Matkul</th>
            <th>Nama Mata Kuliah</th>
            <th>SKS</th>
            <th>Dosen Pengampu</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $data = mysqli_query($conn, "
            SELECT m.*, d.nama AS namaDosen 
            FROM tbl_matkul m
            LEFT JOIN tbl_dosen d ON m.nidn = d.nidn
            ORDER BY m.kodeMatkul ASC
        ");
        while($row = mysqli_fetch_assoc($data)){
        ?>
        <tr>
            <td><?= $row['kodeMatkul']; ?></td>
            <td><?= $row['namaMatkul']; ?></td>
            <td><?= $row['sks']; ?></td>
            <td><?= $row['namaDosen']; ?></td>
        </tr>
        <?php } ?>
    </tbody>
</table>

<a href="menu.php" class="btn btn-secondary">Kembali ke Menu</a>
</body>
</html>