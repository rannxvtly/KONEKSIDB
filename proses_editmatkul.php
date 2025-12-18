<?php
include "koneksi.php";
include "blokmhs.php";

$kode = $_POST['kodeMatkul'];
$nama = $_POST['namaMatkul'];
$sks  = $_POST['sks'];
$nidn = $_POST['nidn'];

mysqli_query($conn, "
    UPDATE tbl_matkul 
    SET namaMatkul='$nama', sks='$sks', nidn='$nidn'
    WHERE kodeMatkul='$kode'
");

header("Location: viewmatkul.php");
?>
