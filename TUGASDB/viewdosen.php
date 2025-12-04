<?php include "koneksi.php"; ?>
<!DOCTYPE html>
<html>
<head>
    <title>Data Dosen</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body class="p-4">

<h2 class="mb-4">Data Dosen</h2>

<table class="table table-bordered table-striped">
    <thead class="table-dark">
        <tr>
            <th>NIDN</th>
            <th>Nama Dosen</th>
            <th>Prodi</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $data = mysqli_query($conn, "SELECT * FROM tbl_dosen ORDER BY nidn ASC");
        while($row = mysqli_fetch_assoc($data)){
        ?>
        <tr>
            <td><?= $row['nidn']; ?></td>
            <td><?= $row['nama']; ?></td>
            <td><?= $row['prodi']; ?></td>
        </tr>
        <?php } ?>
    </tbody>
</table>

<a href="menu.php" class="btn btn-secondary">Kembali ke Menu</a>
</body>
</html>