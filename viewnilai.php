<?php
include "koneksi.php";

$data = mysqli_query($conn, "
    SELECT n.*, 
           m.nama AS namaMahasiswa,
           mk.namaMatkul,
           d.nama AS namaDosen
    FROM tbl_nilai n
    LEFT JOIN tbl_mahasiswa m ON n.nim = m.nim
    LEFT JOIN tbl_matkul mk ON n.kodeMatkul = mk.kodeMatkul
    LEFT JOIN tbl_dosen d ON n.nidn = d.nidn
    ORDER BY id_nilai ASC
");
?>
<!DOCTYPE html>
<html>
<head>
    <title>Data Nilai</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">

<div class="container mt-4">
    <div class="card shadow-lg">

        <!-- HEADER -->
        <div class="card-header text-white" style="background:#24272b;">
            <h4 class="mb-0">Data Nilai</h4>
        </div>

        <div class="card-body">

            <a href="tambahnilai.php" class="btn btn-primary mb-3">Tambah Nilai</a>

            <table class="table table-bordered table-striped">
                <thead class="table-dark">
                    <tr>
                        <th>ID</th>
                        <th>Nilai Angka</th>
                        <th>Nilai Huruf</th>
                        <th>Mata Kuliah</th>
                        <th>Mahasiswa</th>
                        <th>Dosen Pengampu</th>
                        <th>Aksi</th>
                    </tr>
                </thead>

                <tbody>
                <?php while ($d = mysqli_fetch_array($data)) { ?>
                    <tr>
                        <td><?= $d['id_nilai'] ?></td>
                        <td><?= $d['nilai'] ?></td>
                        <td><?= $d['nilaiHuruf'] ?></td>

                        <td>
                            <?= $d['namaMatkul'] ?> 
                            <br><small class="text-muted"><?= $d['kodeMatkul'] ?></small>
                        </td>

                        <td>
                            <?= $d['namaMahasiswa'] ?>
                            <br><small class="text-muted"><?= $d['nim'] ?></small>
                        </td>

                        <td>
                            <?= $d['namaDosen'] ?>
                            <br><small class="text-muted"><?= $d['nidn'] ?></small>
                        </td>

                        <td>
                            <a href="editnilai.php?id=<?= $d['id_nilai'] ?>"
                               class="btn btn-warning btn-sm px-3">Edit</a>

                            <a href="hapusnilai.php?id=<?= $d['id_nilai'] ?>"
                               onclick="return confirm('Anda yakin ingin menghapus data ini?')"
                               class="btn btn-danger btn-sm px-3">Hapus</a>
                        </td>
                    </tr>
                <?php } ?>
                </tbody>
            </table>

            <a href="menu.php" class="btn btn-secondary mt-2">Kembali ke Menu</a>

        </div>
    </div>
</div>

</body>
</html>