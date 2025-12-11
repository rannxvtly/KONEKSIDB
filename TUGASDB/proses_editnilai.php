<?php
include "koneksi.php";

$id         = $_POST['id_nilai'];
$nilai      = $_POST['nilai'];
$nilaiHuruf = $_POST['nilaiHuruf'];
$kodeMatkul = $_POST['kodeMatkul'];
$nim        = $_POST['nim'];
$nidn       = $_POST['nidn'];

mysqli_query($conn, "UPDATE tbl_nilai SET
    nilai      = '$nilai',
    nilaiHuruf = '$nilaiHuruf',
    kodeMatkul = '$kodeMatkul',
    nim        = '$nim',
    nidn       = '$nidn'
WHERE id_nilai='$id'
");

header("Location: view_nilai.php");
?>