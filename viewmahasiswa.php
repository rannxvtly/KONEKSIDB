<?php
$conn = mysqli_connect("localhost", "root", "", "kampus");
$query = mysqli_query($conn, "SELECT * FROM tbl_mahasiswa");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Data Mahasiswa</title>

    <!-- BOOTSTRAP -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .container-box {
            background: #ffffff;
            padding: 25px;
            border-radius: 10px;
            box-shadow: 0px 0px 10px rgba(0,0,0,0.1);
        }
        body {
            background-color: #f8f9fa;
        }
    </style>
</head>

<body>

<div class="container mt-5">
    <div class="container-box">
        <div class="d-flex justify-content-between align-items-center mb-3">
            <h3 class="mb-0">Data Mahasiswa</h3>
            <a href="tambahmahasiswa.php" class="btn btn-primary">Tambah Mahasiswa</a>
        </div>

        <table class="table table-bordered table-striped text-center align-middle">
            <thead class="table-dark">
                <tr>
                    <th>NIM</th>
                    <th>Nama</th>
                    <th>Prodi</th>
                    <th>Angkatan</th>
                    <th>Email</th>
                    <th width="160px">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php while ($row = mysqli_fetch_assoc($query)) { ?>
                    <tr>
                        <td><?= $row['nim'] ?></td>
                        <td><?= $row['nama'] ?></td>
                        <td><?= $row['prodi'] ?></td>
                        <td><?= $row['angkatan'] ?></td>
                        <td><?= $row['email'] ?></td>
                        <td>
                            <a href="editmahasiswa.php?nim=<?= $row['nim'] ?>" class="btn btn-warning btn-sm">Edit</a>

                            <a href="hapusmahasiswa.php?nim=<?= $row['nim'] ?>"
                               class="btn btn-danger btn-sm"
                               onclick="return confirm('Yakin ingin menghapus data ini?')">Hapus</a>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>

        <a href="menu.php" class="btn btn-secondary mt-3">Kembali ke Menu</a>

    </div>
</div>

<!-- BOOTSTRAP JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>