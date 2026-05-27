<?php
require_once 'Database.php';
$db  = new Database();
$con = $db->getConnection();

if (isset($_GET['nim'])) {
    $id   = $_GET['nim'];
    $stmt = $con->prepare("DELETE FROM t_mahasiswa WHERE nim=?");
    $stmt->bind_param("i", $id);
    $stmt->execute();

    if ($stmt->error) {
        die("Gagal menghapus: " . $stmt->error);
    }

    $stmt->close();
}

header("location: list_mahasiswa.php");
exit;
?>
