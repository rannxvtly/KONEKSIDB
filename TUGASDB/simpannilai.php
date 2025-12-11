<?php
include "koneksi.php";

$idMhs     = $_POST['idMhs'];
$idMatkul  = $_POST['idMatkul'];
$nilai     = $_POST['nilai'];

$query = "INSERT INTO tbl_nilai(idMhs, idMatkul, nilai)
          VALUES('$idMhs', '$idMatkul', '$nilai')";

mysqli_query($conn, $query);

header("Location: viewnilai.php");
?>