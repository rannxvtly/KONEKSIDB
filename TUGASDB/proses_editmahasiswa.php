<?php
include 'koneksi.php';

$nim       = $_POST['nim'];
$nama      = $_POST['nama'];
$prodi     = $_POST['prodi'];
$angkatan  = $_POST['angkatan'];
$email     = $_POST['email'];

//update
$query = "UPDATE tbl_mahasiswa SET 
            nama='$nama',
            prodi='$prodi',
            angkatan='$angkatan',
            email='$email'
          WHERE nim='$nim'";

$hasil = mysqli_query($conn, $query);

if (!$hasil) {
    die("Gagal mengupdate: " . mysqli_error($conn));
}

header("Location: viewmahasiswa.php");
exit;
?>