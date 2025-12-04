<?php
$conn = mysqli_connect("localhost", "root", "", "kampus");
$query = mysqli_query($conn, "SELECT * FROM tbl_mahasiswa");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Data Mahasiswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>

<div class="container mt-5">
    <h3 class="mb-4">Data Mahasiswa</h3>

    <table class="table table-bordered table-striped">
        <tr class="table-dark">
            <th>NIM</th>
            <th>Nama</th>
            <th>Prodi</th>
            <th>Angkatan</th>
            <th>Email</th>
        </tr>

        <?php while ($row = mysqli_fetch_assoc($query)) { ?>
            <tr>
                <td><?= $row['nim'] ?></td>
                <td><?= $row['nama'] ?></td>
                <td><?= $row['prodi'] ?></td>
                <td><?= $row['angkatan'] ?></td>
                <td><?= $row['email'] ?></td>
            </tr>
        <?php } ?>
    </table>

    <a href="menu.php" class="btn btn-secondary">Kembali ke Menu</a>
</div>

</body>
</html>
