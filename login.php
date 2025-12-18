<?php
session_start();
include "koneksi.php";
include "proseslogin.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light d-flex align-items-center" style="min-height:100vh;">

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-4">

            <div class="card shadow">
                <div class="card-body">
                    <h4 class="text-center mb-4">Login Sistem Kampus</h4>

                    <form method="post">
                        <div class="mb-3">
                            <input type="text" name="username" class="form-control"
                                   placeholder="NIM / NIDN" required>
                        </div>

                        <div class="mb-3">
                            <input type="password" name="password" class="form-control"
                                   placeholder="Password" required>
                        </div>

                        <div class="mb-3">
                            <select name="role" class="form-select" required>
                                <option value="">Login sebagai</option>
                                <option value="mhs">Mahasiswa</option>
                                <option value="dosen">Dosen</option>
                            </select>
                        </div>

                        <button type="submit" name="login"
                                class="btn btn-primary w-100">
                            Login
                        </button>
                    </form>

                </div>
            </div>

        </div>
    </div>
</div>

</body>
</html>