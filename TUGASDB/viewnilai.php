<?php include "koneksi.php"; ?>
<!DOCTYPE html>
<html>
<head>
    <title>Data Nilai</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body class="p-4">

<h2 class="mb-4">Data Nilai Mahasiswa</h2>

<table class="table table-bordered table-striped">
    <thead class="table-dark">
        <tr>
            <th>ID Nilai</th>
            <th>Mahasiswa</th>
            <th>NIM</th>
            <th>Mata Kuliah</th>
            <th>Dosen</th>
            <th>Nilai</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $data = mysqli_query($conn, "
            SELECT n.id_nilai,
       mhs.nama AS namaMahasiswa,
       mhs.nim AS nimMahasiswa,
       mk.namaMatkul,
       d.nama AS namaDosen,
       n.nilai,
       n.nilaiHuruf
FROM tbl_nilai n
LEFT JOIN tbl_mahasiswa mhs ON n.nim = mhs.nim
LEFT JOIN tbl_matkul mk ON n.kodeMatkul = mk.kodeMatkul
LEFT JOIN tbl_dosen d ON n.nidn = d.nidn
ORDER BY n.id_nilai ASC;

        ");
        while($row = mysqli_fetch_assoc($data)){
        ?>
        <tr>
            <td><?= $row['id_nilai']; ?></td>
            <td><?= $row['namaMahasiswa']; ?></td>
            <td><?= $row['nimMahasiswa']; ?></td>
            <td><?= $row['namaMatkul']; ?></td>
            <td><?= $row['namaDosen']; ?></td>
            <td><?= $row['nilai']; ?></td>
        </tr>
        <?php } ?>
    </tbody>
</table>

<a href="menu.php" class="btn btn-secondary">Kembali ke Menu</a>
</body>
</html>