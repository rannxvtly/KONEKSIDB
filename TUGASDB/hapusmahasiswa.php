<?php
include 'koneksi.php';

$nim = $_GET['nim'];

mysqli_query($conn, "DELETE FROM tbl_mahasiswa WHERE nim='$nim'");

header("Location: viewmahasiswa.php");
exit;
?>