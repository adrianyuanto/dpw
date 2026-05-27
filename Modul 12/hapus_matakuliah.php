<?php
require_once 'Database.php';
$db  = new Database();
$con = $db->getConnection();

if (isset($_GET['kodeMK'])) {
    $id   = $_GET['kodeMK'];
    $stmt = $con->prepare("DELETE FROM t_matakuliah WHERE kodeMK=?");
    $stmt->bind_param("i", $id);
    $stmt->execute();

    if ($stmt->error) {
        die("Gagal menghapus: " . $stmt->error);
    }

    $stmt->close();
}

header("location: list_matakuliah.php");
exit;
?>
