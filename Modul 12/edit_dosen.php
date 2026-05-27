<?php
require_once 'Database.php';
$db  = new Database();
$con = $db->getConnection();

if (isset($_GET['idDosen'])) {
    $id = $_GET['idDosen'];

    $stmt = $con->prepare("SELECT * FROM t_dosen WHERE idDosen = ?");
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $hasil = $stmt->get_result();

    if ($hasil->num_rows === 0) {
        header("location: list_dosen.php");
        exit;
    }

    $baris     = $hasil->fetch_assoc();
    $idDosen   = $baris['idDosen'];
    $namaDosen = $baris['namaDosen'];
    $noHP      = $baris['noHP'];
    $stmt->close();

} else {
    header("location: list_dosen.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Edit Dosen (OOP)</title>
</head>
<body>
    <h1>Edit Data Dosen</h1>
    <div class="container">
        <div class="nav-link">
            <a href="list_dosen.php">← Kembali ke Daftar Dosen</a>
        </div>
        <form action="proses_edit_dosen.php" method="post">
            <fieldset>
                <legend><b>Edit Data Dosen</b></legend>
                <p>
                    <label>ID :</label>
                    <input type="hidden" name="idDosen" value="<?php echo $idDosen; ?>">
                    <input type="text" value="<?php echo htmlspecialchars($idDosen); ?>" disabled>
                </p>
                <p>
                    <label for="namaDosen">Nama Dosen :</label>
                    <input type="text" name="namaDosen" id="namaDosen"
                           value="<?php echo htmlspecialchars($namaDosen); ?>">
                </p>
                <p>
                    <label for="noHP">No HP :</label>
                    <input type="text" name="noHP" id="noHP"
                           value="<?php echo htmlspecialchars($noHP); ?>">
                </p>
            </fieldset>
            <p>
                <input type="submit" name="edit" value="Update Data">
            </p>
        </form>
    </div>
</body>
</html>
