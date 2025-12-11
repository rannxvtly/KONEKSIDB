<?php
include "koneksi.php";

//ambil data dari form
$nidn  = $_POST['nidn'];
$nama  = $_POST['nama'];
$prodi = $_POST['prodi'];

//update ke database
$query = "UPDATE tbl_dosen 
          SET nama='$nama', prodi='$prodi'
          WHERE nidn='$nidn'";

mysqli_query($conn, $query);

//kembali ke halaman view
header("Location: viewdosen.php");
exit;
?>