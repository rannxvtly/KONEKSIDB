<?php  
include "koneksi.php";

$id = $_GET['id'];

mysqli_query($conn, "DELETE FROM tbl_nilai WHERE idNilai='$id'");

header("Location: viewnilai.php");
?>