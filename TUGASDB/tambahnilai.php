<?php include "koneksi.php"; ?>
<!DOCTYPE html>
<html>
<head>
    <title>Tambah Nilai Mahasiswa</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body>

<div class="container mt-4">
    <div class="card">

        <div class="card-header bg-dark text-white">
            <h4 class="mb-0">Tambah Nilai Mahasiswa</h4>
        </div>

        <div class="card-body">

            <form action="simpannilai.php" method="POST" class="w-50">

                <!-- PILIH MAHASISWA -->
                <div class="mb-3">
                    <label class="form-label">Mahasiswa</label>
                    <select name="nim" class="form-select" required>
                        <option value="">-- Pilih Mahasiswa --</option>
                        <?php
                        $mhs = mysqli_query($conn, "SELECT * FROM tbl_mahasiswa ORDER BY nama ASC");
                        while($row = mysqli_fetch_array($mhs)){
                            echo "<option value='{$row['nim']}'>{$row['nama']} - {$row['nim']}</option>";
                        }
                        ?>
                    </select>
                </div>

                <!-- PILIH MATA KULIAH -->
                <div class="mb-3">
                    <label class="form-label">Mata Kuliah</label>
                    <select name="kodeMatkul" class="form-select" required>
                        <option value="">-- Pilih Mata Kuliah --</option>
                        <?php
                        $mk = mysqli_query($conn, "SELECT * FROM tbl_matkul ORDER BY namaMatkul ASC");
                        while($mat = mysqli_fetch_array($mk)){
                            echo "<option value='{$mat['kodeMatkul']}'>{$mat['namaMatkul']}</option>";
                        }
                        ?>
                    </select>
                </div>

                <!-- PILIH DOSEN -->
                <div class="mb-3">
                    <label class="form-label">Dosen Pengampu</label>
                    <select name="nidn" class="form-select" required>
                        <option value="">-- Pilih Dosen --</option>
                        <?php
                        $dsn = mysqli_query($conn, "SELECT * FROM tbl_dosen ORDER BY nama ASC");
                        while($d = mysqli_fetch_array($dsn)){
                            echo "<option value='{$d['nidn']}'>{$d['nama']}</option>";
                        }
                        ?>
                    </select>
                </div>

                <!-- INPUT NILAI -->
                <div class="mb-3">
                    <label class="form-label">Nilai</label>
                    <input type="number" name="nilai" class="form-control" min="0" max="100" required>
                </div>

                <!-- BUTTON -->
                <button class="btn btn-primary">Simpan</button>
                <a href="viewnilai.php" class="btn btn-secondary">Kembali</a>

            </form>

        </div>

    </div>
</div>

</body>
</html>