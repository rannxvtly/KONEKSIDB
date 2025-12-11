<?php  
include "koneksi.php";

$idNilai   = $_POST['idNilai'];
$idMhs     = $_POST['idMhs'];
$idMatkul  = $_POST['idMatkul'];
$nilai     = $_POST['nilai'];

mysqli_query($conn, 
    "UPDATE tbl_nilai SET 
        idMhs='$idMhs',
        idMatkul='$idMatkul',
        nilai='$nilai'
    WHERE idNilai='$idNilai'"
);

header("Location: viewnilai.php");
?>