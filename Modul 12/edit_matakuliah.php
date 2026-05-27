<?php
require_once 'Database.php';
$db  = new Database();
$con = $db->getConnection();

if (isset($_GET['kodeMK'])) {
    $id   = $_GET['kodeMK'];
    $stmt = $con->prepare("SELECT * FROM t_matakuliah WHERE kodeMK = ?");
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $hasil = $stmt->get_result();

    if ($hasil->num_rows === 0) {
        header("location: list_matakuliah.php");
        exit;
    }

    $baris  = $hasil->fetch_assoc();
    $kodeMK = $baris['kodeMK'];
    $namaMK = $baris['namaMK'];
    $sks    = $baris['sks'];
    $jam    = $baris['jam'];
    $stmt->close();

} else {
    header("location: list_matakuliah.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Edit Matakuliah (OOP)</title>
</head>
<body>
    <h1>Edit Data Matakuliah</h1>
    <div class="container">
        <div class="nav-link">
            <a href="list_matakuliah.php">← Kembali ke Daftar Matakuliah</a>
        </div>
        <form action="proses_edit_matakuliah.php" method="post">
            <fieldset>
                <legend><b>Edit Data Matakuliah</b></legend>
                <p>
                    <label>Kode MK :</label>
                    <input type="hidden" name="kodeMK" value="<?php echo $kodeMK; ?>">
                    <input type="text" value="<?php echo htmlspecialchars($kodeMK); ?>" disabled>
                </p>
                <p>
                    <label for="namaMK">Nama MK :</label>
                    <input type="text" name="namaMK" id="namaMK"
                           value="<?php echo htmlspecialchars($namaMK); ?>">
                </p>
                <p>
                    <label for="sks">SKS :</label>
                    <input type="number" name="sks" id="sks"
                           value="<?php echo htmlspecialchars($sks); ?>" min="1" max="6">
                </p>
                <p>
                    <label for="jam">Jam :</label>
                    <input type="number" name="jam" id="jam"
                           value="<?php echo htmlspecialchars($jam); ?>" min="1">
                </p>
            </fieldset>
            <p><input type="submit" name="edit" value="Update Data"></p>
        </form>
        <div class="btn-home-wrapper">
            <a href="index.php" class="btn-home">Kembali ke Menu Utama</a>
        </div>
    </div>
</body>
</html>
