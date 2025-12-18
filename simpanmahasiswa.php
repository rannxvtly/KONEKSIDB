<?php
include 'koneksi.php';
include "blokmhs.php";

$nim       = $_POST['nim'];
$nama      = $_POST['nama'];
$prodi     = $_POST['prodi'];
$angkatan  = $_POST['angkatan'];
$email     = $_POST['email'];

if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}

//cek apakah NIM sudah ada
$cek = mysqli_query($conn, "SELECT nim FROM tbl_mahasiswa WHERE nim='$nim'");
if (mysqli_num_rows($cek) > 0) {
    die("Gagal menyimpan data: NIM sudah terdaftar.");
}

//insert data
$query = "INSERT INTO tbl_mahasiswa VALUES ('$nim', '$nama', '$prodi', '$angkatan', '$email')";
$hasil = mysqli_query($conn, $query);

if (!$hasil) {
    die("Gagal menyimpan: " . mysqli_error($conn));
}
header("Location: viewmahasiswa.php");
exit;
?>
