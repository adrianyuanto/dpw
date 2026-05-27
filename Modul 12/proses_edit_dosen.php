<?php
if (isset($_POST['edit'])) {

    require_once 'Database.php';
    $db  = new Database();
    $con = $db->getConnection();

    $id        = $_POST['idDosen'];
    $namaDosen = $_POST['namaDosen'];
    $noHP      = $_POST['noHP'];

    $stmt = $con->prepare("UPDATE t_dosen SET namaDosen=?, noHP=? WHERE idDosen=?");

    $stmt->bind_param("ssi", $namaDosen, $noHP, $id);

    $stmt->execute();

    if ($stmt->error) {
        die("Query gagal: " . $stmt->error);
    }

    $stmt->close();
}

header("location: list_dosen.php");
exit;
?>
