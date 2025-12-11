<?php include "koneksi.php"; ?>
<!DOCTYPE html>
<html>
<head>
    <title>Data Nilai Mahasiswa</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body class="p-4">

<div class="container mt-4">
    <div class="card shadow">

        <div class="card-header bg-dark text-white">
            <h4 class="mb-0">Data Nilai Mahasiswa</h4>
        </div>

        <div class="card-body">

            <a href="tambahnilai.php" class="btn btn-primary mb-3">Tambah Nilai</a>

            <table class="table table-bordered table-striped">
                <thead class="table-dark">
                    <tr>
                        <th>ID Nilai</th>
                        <th>Nama Mahasiswa</th>
                        <th>NIM</th>
                        <th>Mata Kuliah</th>
                        <th>Dosen Pengampu</th>
                        <th>Nilai Angka</th>
                        <th width="150px">Aksi</th>
                    </tr>
                </thead>

                <tbody>
                <?php
                $query = mysqli_query($conn, "
                    SELECT n.id_nilai,
                           mhs.nama AS namaMahasiswa,
                           mhs.nim AS nimMahasiswa,
                           mk.namaMatkul,
                           d.nama AS namaDosen,
                           n.nilai
                    FROM tbl_nilai n
                    LEFT JOIN tbl_mahasiswa mhs ON n.nim = mhs.nim
                    LEFT JOIN tbl_matkul mk ON n.kodeMatkul = mk.kodeMatkul
                    LEFT JOIN tbl_dosen d ON mk.nidn = d.nidn
                    ORDER BY n.id_nilai ASC
                ");

                while($row = mysqli_fetch_array($query)){
                ?>
                    <tr>
                        <td><?= $row['id_nilai']; ?></td>
                        <td><?= $row['namaMahasiswa']; ?></td>
                        <td><?= $row['nimMahasiswa']; ?></td>
                        <td><?= $row['namaMatkul']; ?></td>
                        <td><?= $row['namaDosen']; ?></td>
                        <td><?= $row['nilai']; ?></td>

                        <td>
                            <a href="editnilai.php?id=<?= $row['id_nilai']; ?>" 
                               class="btn btn-warning btn-sm">
                               Edit
                            </a>

                            <a href="hapusnilai.php?id=<?= $row['id_nilai']; ?>" 
                               class="btn btn-danger btn-sm"
                               onclick="return confirm('Yakin ingin menghapus nilai ini?');">
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
