<?php
// Cek apakah ada file yang diupload
if (!isset($_FILES['filefoto'])) {
    echo "Tidak ada file yang dipilih!";
    echo "<br><a href='upload.php'>Kembali</a>";
    exit;
}

$namaFile = $_FILES['filefoto']['name'];
$lokasiSementara = $_FILES['filefoto']['tmp_name'];

// Folder tujuan (sesuai dengan viewmahasiswa.php)
$lokasiTujuan = "foto/" . $namaFile;

// --- OPSIONAL VALIDASI (ukuran dikembalikan seperti kode lama) ---
// if ($_FILES['filefoto']['size'] > 10000) {
//     echo "Ukuran file terlalu besar!";
//     echo "<br><a href='upload.php'>Kembali</a>";
//     exit;
// }

// Proses upload
if (move_uploaded_file($lokasiSementara, $lokasiTujuan)) {
    echo "File berhasil diupload! <br>";
    echo "Lokasi: " . $lokasiTujuan;
} else {
    echo "File gagal diupload!";
}
?>
<?php