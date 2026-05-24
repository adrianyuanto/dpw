<?php
include 'koneksi.php';

if (isset($_GET['kodeMK'])) {
    $id     = $_GET['kodeMK'];
    $query  = "SELECT * FROM t_matakuliah WHERE kodeMK='$id'";
    $result = mysqli_query($link, $query);

    if (!$result) {
        die("Query Error: " . mysqli_errno($link) . " - " . mysqli_error($link));
    }

    $data   = mysqli_fetch_assoc($result);
    $kodeMK = $data['kodeMK'];
    $namaMK = $data['namaMK'];
    $sks    = $data['sks'];
    $jam    = $data['jam'];

} else {
    header("location:viewmatakuliah.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Edit Matakuliah</title>
</head>
<body>
    <h1>Edit Data Matakuliah</h1>
    <div class="container">
        <div class="nav-link">
            <a href="viewmatakuliah.php">← Kembali ke Daftar Matakuliah</a>
        </div>
        <div class="btn-home-wrapper">
            <a href="index.php" class="btn-home">Kembali ke Menu Utama</a>
        </div>
        <form action="proses_editmatakuliah.php" method="post">
            <fieldset>
                <legend><b>Edit Data Matakuliah</b></legend>
                <p>
                    <label>Kode MK :</label>
                    <input type="hidden" name="kodeMK" value="<?php echo $kodeMK; ?>">
                    <input type="text" value="<?php echo $kodeMK; ?>" disabled>
                </p>
                <p>
                    <label for="namaMK">Nama MK :</label>
                    <input type="text" name="namaMK" id="namaMK" value="<?php echo $namaMK; ?>">
                </p>
                <p>
                    <label for="sks">SKS :</label>
                    <input type="number" name="sks" id="sks" value="<?php echo $sks; ?>" min="1" max="6">
                </p>
                <p>
                    <label for="jam">Jam :</label>
                    <input type="number" name="jam" id="jam" value="<?php echo $jam; ?>" min="1">
                </p>
            </fieldset>
            <p>
                <input type="submit" name="edit" value="Update Data">
            </p>
        </form>
    </div>
</body>
</html>
