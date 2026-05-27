<?php
if (isset($_POST['input'])) {

    require_once 'Database.php';
    $db  = new Database();
    $con = $db->getConnection();

    $nim     = $_POST['nim'];
    $namaMhs = $_POST['namaMhs'];
    $prodi   = $_POST['prodi'];
    $alamat  = $_POST['alamat'];
    $noHP    = $_POST['noHP'];

    $stmt = $con->prepare("INSERT INTO t_mahasiswa (nim, namaMhs, prodi, alamat, noHP)
                           VALUES (?, ?, ?, ?, ?)");

    $stmt->bind_param("issss", $nim, $namaMhs, $prodi, $alamat, $noHP);
    $stmt->execute();

    if ($stmt->error) {
        die("Gagal menyimpan: " . $stmt->error);
    }

    $stmt->close();
}

header("location: list_mahasiswa.php");
exit;
?>
