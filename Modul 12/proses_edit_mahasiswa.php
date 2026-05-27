<?php
if (isset($_POST['edit'])) {

    require_once 'Database.php';
    $db  = new Database();
    $con = $db->getConnection();

    $nim     = $_POST['nim'];
    $namaMhs = $_POST['namaMhs'];
    $prodi   = $_POST['prodi'];
    $alamat  = $_POST['alamat'];
    $noHP    = $_POST['noHP'];

    $stmt = $con->prepare(
        "UPDATE t_mahasiswa SET namaMhs=?, prodi=?, alamat=?, noHP=? WHERE nim=?"
    );

    $stmt->bind_param("ssssi", $namaMhs, $prodi, $alamat, $noHP, $nim);
    $stmt->execute();

    if ($stmt->error) {
        die("Query gagal: " . $stmt->error);
    }

    $stmt->close();
}

header("location: list_mahasiswa.php");
exit;
?>
