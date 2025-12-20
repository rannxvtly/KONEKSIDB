<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Upload Foto Mahasiswa</title>

    <!-- BOOTSTRAP -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background: #f8f9fa;
        }
        .upload-box {
            background: #ffffff;
            padding: 25px;
            border-radius: 10px;
            max-width: 500px;
            margin: 70px auto;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }
    </style>
</head>

<body>

<div class="upload-box">

    <h4 class="text-center mb-4">Upload Foto Mahasiswa</h4>

    <form action="proses_upload.php" method="post" enctype="multipart/form-data">

        <div class="mb-3">
            <label class="form-label">Pilih Foto</label>
            <input type="file" name="filefoto" class="form-control" required>
        </div>

        <div class="d-grid">
            <button type="submit" class="btn btn-primary">Upload</button>
        </div>

    </form>

    <a href="viewmahasiswa.php" class="btn btn-secondary mt-3 w-100">Kembali</a>

</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>