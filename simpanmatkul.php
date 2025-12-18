<?php
include "koneksi.php";
include "blokmhs.php";

// Tangkap data dari form
$kodeMatkul   = $_POST['kodeMatkul'];
$namaMatkul   = $_POST['namaMatkul'];
$sks          = $_POST['sks'];
$nidn         = $_POST['nidn'];

// Validasi koneksi
if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}

// Query insert
$query = "
    INSERT INTO tbl_matkul (kodeMatkul, namaMatkul, sks, nidn) 
    VALUES ('$kodeMatkul', '$namaMatkul', '$sks', '$nidn')
";

$insert = mysqli_query($conn, $query);

// Cek error
if (!$insert) {
    die("Gagal menyimpan data: " . mysqli_error($conn));
}

// Redirect
header("Location: viewmatkul.php");
exit;
?>