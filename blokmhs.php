<?php
session_start();

/* Harus login */
if (!isset($_SESSION['login_user'])) {
    header("Location: login.php");
    exit();
}

/*
 BLOK SEMUA AKSI POST UNTUK MAHASISWA
 (CRUD SELALU PAKE POST)
*/
if ($_SESSION['role'] == 'mhs' && $_SERVER['REQUEST_METHOD'] == 'POST') {
    header("Location: menu.php");
    exit();
}
?>