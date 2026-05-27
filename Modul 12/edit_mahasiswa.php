<?php
require_once 'Database.php';
$db  = new Database();
$con = $db->getConnection();

if (isset($_GET['nim'])) {
    $id   = $_GET['nim'];
    $stmt = $con->prepare("SELECT * FROM t_mahasiswa WHERE nim = ?");
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $hasil = $stmt->get_result();

    if ($hasil->num_rows === 0) {
        header("location: list_mahasiswa.php");
        exit;
    }

    $baris   = $hasil->fetch_assoc();
    $nim     = $baris['nim'];
    $namaMhs = $baris['namaMhs'];
    $prodi   = $baris['prodi'];
    $alamat  = $baris['alamat'];
    $noHP    = $baris['noHP'];
    $stmt->close();

} else {
    header("location: list_mahasiswa.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Edit Mahasiswa (OOP)</title>
</head>
<body>
    <h1>Edit Data Mahasiswa</h1>
    <div class="container">
        <div class="nav-link">
            <a href="list_mahasiswa.php">← Kembali ke Daftar Mahasiswa</a>
        </div>
        <form action="proses_edit_mahasiswa.php" method="post">
            <fieldset>
                <legend><b>Edit Data Mahasiswa</b></legend>
                <p>
                    <label>NIM :</label>
                    <input type="hidden" name="nim" value="<?php echo $nim; ?>">
                    <input type="text" value="<?php echo htmlspecialchars($nim); ?>" disabled>
                </p>
                <p>
                    <label for="namaMhs">Nama :</label>
                    <input type="text" name="namaMhs" id="namaMhs"
                           value="<?php echo htmlspecialchars($namaMhs); ?>">
                </p>
                <p>
                    <label for="prodi">Prodi :</label>
                    <input type="text" name="prodi" id="prodi"
                           value="<?php echo htmlspecialchars($prodi); ?>">
                </p>
                <p>
                    <label for="alamat">Alamat :</label>
                    <input type="text" name="alamat" id="alamat"
                           value="<?php echo htmlspecialchars($alamat); ?>">
                </p>
                <p>
                    <label for="noHP">No HP :</label>
                    <input type="text" name="noHP" id="noHP"
                           value="<?php echo htmlspecialchars($noHP); ?>">
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
