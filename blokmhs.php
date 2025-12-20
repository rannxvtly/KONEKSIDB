<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

// Jika bukan mahasiswa, maka boleh CRUD
if ($_SESSION['role'] == "mhs") {
    echo "<script>
            alert('Akses ditolak! Mahasiswa hanya bisa melihat data.');
            window.location.href = 'menu.php';
          </script>";
    exit();
}
?>