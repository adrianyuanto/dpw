<?php
if (isset($_POST['edit'])) {

    require_once 'Database.php';
    $db  = new Database();
    $con = $db->getConnection();

    $kodeMK = $_POST['kodeMK'];
    $namaMK = $_POST['namaMK'];
    $sks    = $_POST['sks'];
    $jam    = $_POST['jam'];

    $stmt = $con->prepare(
        "UPDATE t_matakuliah SET namaMK=?, sks=?, jam=? WHERE kodeMK=?"
    );

    $stmt->bind_param("siii", $namaMK, $sks, $jam, $kodeMK);
    $stmt->execute();

    if ($stmt->error) {
        die("Query gagal: " . $stmt->error);
    }

    $stmt->close();
}

header("location: list_matakuliah.php");
exit;
?>
