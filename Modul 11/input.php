<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Input Data Dosen</title>
</head>
<body>
    <div class="container">

        <div class="nav-link">
            <a href="viewdosen.php">← Lihat Data Dosen</a>
        </div>

        <form id="form_dosen" action="proses_inputdosen.php" method="post">
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
