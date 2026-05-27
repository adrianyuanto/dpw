<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Input Matakuliah (OOP)</title>
</head>
<body>
    <h1>Input Data Matakuliah</h1>
    <div class="container">
        <div class="nav-link">
            <a href="list_matakuliah.php">← Lihat Data</a>
        </div>
        <form action="proses_input_matakuliah.php" method="post">
            <fieldset>
                <legend><b>Input Data Matakuliah</b></legend>
                <p>
                    <label for="kodeMK">Kode MK :</label>
                    <input type="number" name="kodeMK" id="kodeMK" placeholder="Kode Matakuliah">
                </p>
                <p>
                    <label for="namaMK">Nama MK :</label>
                    <input type="text" name="namaMK" id="namaMK" placeholder="Nama Matakuliah">
                </p>
                <p>
                    <label for="sks">SKS :</label>
                    <input type="number" name="sks" id="sks" min="1" max="6">
                </p>
                <p>
                    <label for="jam">Jam :</label>
                    <input type="number" name="jam" id="jam" min="1">
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
