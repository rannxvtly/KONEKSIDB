<?php 

include "koneksi.php"; ?>
<!DOCTYPE html>
<html>
<head>
    <title>Data Mata Kuliah</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>

<body class="bg-light">

<div class="container mt-5">
    <div class="card shadow">

        <!-- HEADER -->
        <div class="card-header bg-dark text-white">
            <h4 class="mb-0">Data Mata Kuliah</h4>
        </div>

        <div class="card-body">

            <!-- TOMBOL TAMBAH -->
            <a href="tambahmatkul.php" class="btn btn-primary mb-3">Tambah Mata Kuliah</a>

            <!-- TABEL DATA -->
            <table class="table table-bordered table-striped">
                <thead class="table-dark">
                    <tr>
                        <th>Kode Matkul</th>
                        <th>Nama Mata Kuliah</th>
                        <th>SKS</th>
                        <th>Dosen Pengampu</th>
                        <th width="160px">Aksi</th>
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
                    while ($row = mysqli_fetch_array($data)) {
                    ?>
                    <tr>
                        <td><?= $row['kodeMatkul']; ?></td>
                        <td><?= $row['namaMatkul']; ?></td>
                        <td><?= $row['sks']; ?></td>
                        <td><?= $row['namaDosen'] ?: '-' ?></td>

                        <td>
                            <a href="editmatkul.php?kodeMatkul=<?= $row['kodeMatkul']; ?>" 
                               class="btn btn-warning btn-sm">Edit</a>

                            <a href="hapusmatkul.php?kodeMatkul=<?= $row['kodeMatkul']; ?>" 
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
