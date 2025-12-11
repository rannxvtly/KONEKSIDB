<?php
include "koneksi.php";

$nidn  = $_POST['nidn'];
$nama  = $_POST['nama'];
$prodi = $_POST['prodi'];

mysqli_query($conn, "INSERT INTO tbl_dosen VALUES ('$nidn','$nama','$prodi')");
header("location:viewdosen.php");
?>