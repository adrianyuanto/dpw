<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Input Mahasiswa (OOP)</title>
</head>
<body>
    <h1>Input Data Mahasiswa</h1>
    <div class="container">
        <div class="nav-link">
            <a href="list_mahasiswa.php">← Lihat Data</a>
        </div>
        <form action="proses_input_mahasiswa.php" method="post">
            <fieldset>
                <legend><b>Input Data Mahasiswa</b></legend>
                <p>
                    <label for="nim">NIM :</label>
                    <input type="number" name="nim" id="nim" placeholder="Nomor Induk Mahasiswa">
                </p>
                <p>
                    <label for="namaMhs">Nama :</label>
                    <input type="text" name="namaMhs" id="namaMhs">
                </p>
                <p>
                    <label for="prodi">Prodi :</label>
                    <input type="text" name="prodi" id="prodi">
                </p>
                <p>
                    <label for="alamat">Alamat :</label>
                    <input type="text" name="alamat" id="alamat">
                </p>
                <p>
                    <label for="noHP">No HP :</label>
                    <input type="text" name="noHP" id="noHP">
                </p>
            </fieldset>
            <p><input type="submit" name="input" value="Simpan"></p>
        </form>
        <div class="btn-home-wrapper">
            <a href="index.php" class="btn-home">Kembali ke Menu Utama</a>
        </div>
    </div>
</body>
</html>
