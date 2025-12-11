<?php
include "koneksi.php";

$nidn  = $_POST['nidn'];
$nama  = $_POST['nama'];
$prodi = $_POST['prodi'];
$email = $_POST['email'];

mysqli_query($conn, "INSERT INTO tbl_dosen VALUES(
    '$nidn',
    '$nama',
    '$prodi',
    '$email'
)");

header("Location: view_dosen.php");
?>