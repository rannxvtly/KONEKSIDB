<?php
include 'koneksi.php';
include "blokmhs.php";

$nim       = $_POST['nim'];
$nama      = $_POST['nama'];
$prodi     = $_POST['prodi'];
$angkatan  = $_POST['angkatan'];
$email     = $_POST['email'];

// foto lama
$foto_lama = $_POST['foto'];

// Cek apakah ada foto baru diupload
if (!empty($_FILES['filefoto']['name'])) {
    $namaFile   = $_FILES['filefoto']['name'];
    $tmpFile    = $_FILES['filefoto']['tmp_name'];
    $tujuan     = "foto/" . $namaFile;

    // Upload file
    if (move_uploaded_file($tmpFile, $tujuan)) {

        // Hapus foto lama jika ada
        if ($foto_lama != "" && file_exists("foto/" . $foto_lama)) {
            unlink("foto/" . $foto_lama);
        }

        $fotoFix = $namaFile;  // pakai foto baru
    } else {
        $fotoFix = $foto_lama; // upload gagal → tetap foto lama
    }

} else {
    $fotoFix = $foto_lama; // tidak upload → tetap foto lama
}

// UPDATE DATA
$query = "UPDATE tbl_mahasiswa SET 
            nama='$nama',
            prodi='$prodi',
            angkatan='$angkatan',
            email='$email',
            foto='$fotoFix'
          WHERE nim='$nim'";

$hasil = mysqli_query($conn, $query);

if (!$hasil) {
    die("Gagal mengupdate: " . mysqli_error($conn));
}

header("Location: viewmahasiswa.php");
exit;
?>
