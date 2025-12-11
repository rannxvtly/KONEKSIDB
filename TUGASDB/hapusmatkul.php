<?php
include "koneksi.php";

$kode = $_GET['kodeMatkul'];

mysqli_query($conn, "DELETE FROM tbl_matkul WHERE kodeMatkul='$kode'");

header("Location: viewmatkul.php");
?>