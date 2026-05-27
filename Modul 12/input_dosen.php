<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Input Data Dosen (OOP)</title>
</head>
<body>
    <h1>Input Data Dosen</h1>
    <div class="container">
        <div class="nav-link">
            <a href="list_dosen.php">← Lihat Data Dosen</a>
        </div>
        <form action="proses_input_dosen.php" method="post">
            <fieldset>
                <legend><b>Input Data Dosen</b></legend>
                <p>
                    <label for="namaDosen">Nama Dosen :</label>
                    <input type="text" name="namaDosen" id="namaDosen">
                </p>
                <p>
                    <label for="noHP">No HP :</label>
                    <input type="text" name="noHP" id="noHP" placeholder="Contoh: 081222333444">
                </p>
            </fieldset>
            <p>
                <input type="submit" name="input" value="Simpan">
            </p>
        </form>
        <div class="btn-home-wrapper">
            <a href="index.php" class="btn-home">Kembali ke Menu Utama</a>
        </div>
    </div>
</body>
</html>
