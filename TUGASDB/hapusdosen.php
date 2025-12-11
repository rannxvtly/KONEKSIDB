<?php
include "koneksi.php";

$nidn = $_GET['nidn'];

mysqli_query($conn, "DELETE FROM tbl_dosen WHERE nidn='$nidn'");
header("location:viewdosen.php");
?>
