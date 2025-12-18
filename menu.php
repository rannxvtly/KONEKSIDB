<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Menu Kampus</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-secondary bg-opacity-10">

<nav class="navbar navbar-dark bg-primary">
    <div class="container-fluid">
        <span class="navbar-brand mb-0 h1">Sistem Akademik Kampus</span>
        <a href="logout.php" class="btn btn-outline-light">Logout</a>
    </div>
</nav>

<div class="container my-5">

    <h3 class="text-center mb-4">Menu View Data Kampus</h3>

    <div class="row g-4">

        <div class="col-md-3">
            <div class="card shadow h-100 text-center">
                <div class="card-body">
                    <h5 class="card-title">Mahasiswa</h5>
                    <p class="card-text">Kelola data mahasiswa</p>
                    <a href="viewmahasiswa.php" class="btn btn-primary w-100">Masuk</a>
                </div>
            </div>
        </div>

        <div class="col-md-3">
            <div class="card shadow h-100 text-center">
                <div class="card-body">
                    <h5 class="card-title">Dosen</h5>
                    <p class="card-text">Kelola data dosen</p>
                    <a href="viewdosen.php" class="btn btn-success w-100">Masuk</a>
                </div>
            </div>
        </div>

        <div class="col-md-3">
            <div class="card shadow h-100 text-center">
                <div class="card-body">
                    <h5 class="card-title">Mata Kuliah</h5>
                    <p class="card-text">Kelola mata kuliah</p>
                    <a href="viewmatkul.php" class="btn btn-warning w-100">Masuk</a>
                </div>
            </div>
        </div>

        <div class="col-md-3">
            <div class="card shadow h-100 text-center">
                <div class="card-body">
                    <h5 class="card-title">Nilai</h5>
                    <p class="card-text">Kelola nilai mahasiswa</p>
                    <a href="viewnilai.php" class="btn btn-danger w-100">Masuk</a>
                </div>
            </div>
        </div>

    </div>
</div>

</body>
</html>