<?php
require_once 'Database.php';
$db  = new Database();
$con = $db->getConnection();

if (isset($_GET['idDosen'])) {
    $id = $_GET['idDosen'];

    $stmt = $con->prepare("DELETE FROM t_dosen WHERE idDosen=?");
    $stmt->bind_param("i", $id);
    $stmt->execute();

    if ($stmt->error) {
        die("Gagal menghapus: " . $stmt->error);
    }

    $stmt->close();
}

header("location: list_dosen.php");
exit;
?>
