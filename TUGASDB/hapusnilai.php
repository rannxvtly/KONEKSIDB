<?php
include "koneksi.php";

$id = $_GET['id'];
mysqli_query($conn, "DELETE FROM tbl_nilai WHERE id_nilai='$id'");

header("Location: view_nilai.php");
?>