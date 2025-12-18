<?php
include "koneksi.php";
include "blokmhs.php";

$nilai      = $_POST['nilai'];
$nilaiHuruf = $_POST['nilaiHuruf'];
$kodeMatkul = $_POST['kodeMatkul'];
$nim        = $_POST['nim'];
$nidn       = $_POST['nidn'];

mysqli_query($conn, "INSERT INTO tbl_nilai VALUES(
    '',
    '$nilai',
    '$nilaiHuruf',
    '$kodeMatkul',
    '$nim',
    '$nidn'
)");

header("Location: viewnilai.php");
?>