<?php include "koneksi.php"; ?>
<!DOCTYPE html>
<html>
<head>
    <title>Data Dosen</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>

<body class="bg-light">

<div class="container mt-5">
    <div class="card shadow">

        <div class="card-header bg-dark text-white">
            <h4 class="mb-0">Data Dosen</h4>
        </div>

        <div class="card-body">

            <a href="tambahdosen.php" class="btn btn-primary mb-3">Tambah Data Dosen</a>

            <table class="table table-bordered table-striped">
                <thead class="table-dark">
                    <tr>
                        <th>NIDN</th>
                        <th>Nama Dosen</th>
                        <th>Prodi</th>
                        <th width="160px">Aksi</th>
                    </tr>
                </thead>

                <tbody>
                    <?php
                    $data = mysqli_query($conn, "SELECT * FROM tbl_dosen ORDER BY nidn ASC");
                    while($row = mysqli_fetch_array($data)){
                    ?>
                    <tr>
                        <td><?= $row['nidn']; ?></td>
                        <td><?= $row['nama']; ?></td>
                        <td><?= $row['prodi']; ?></td>
                        <td>
                            <a href="editdosen.php?nidn=<?= $row['nidn']; ?>" class="btn btn-warning btn-sm">Edit</a>
                            <a href="hapusdosen.php?nidn=<?= $row['nidn']; ?>" 
                               class="btn btn-danger btn-sm"
                               onclick="return confirm('Yakin ingin menghapus data ini?');">
                               Hapus
                            </a>
                        </td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>

            <a href="menu.php" class="btn btn-secondary">Kembali ke Menu</a>

        </div>
    </div>
</div>
</body>
</html>