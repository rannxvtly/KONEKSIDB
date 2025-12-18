<?php
include('koneksi.php');


if (isset($_POST['login'])) {

    $user = $_POST['username'];
    $pass = $_POST['password'];
    $role = $_POST['role'];

    $sql = "SELECT * FROM tbl_user 
            WHERE username = '$user' 
            AND password = '$pass'
            AND role = '$role'";

    $hasil = mysqli_query($conn, $sql);
    $count = mysqli_num_rows($hasil);

    if ($count == 1) {
        $data = mysqli_fetch_assoc($hasil);

        $_SESSION['login_user'] = $data['username'];
        $_SESSION['role']       = $data['role'];

        header("Location: menu.php");
        exit();
    } else {
        echo "Username, Password, atau Role salah!";
    }
}
?>