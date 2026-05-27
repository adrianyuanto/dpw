<?php
if (isset($_POST['input'])) {

    require_once 'Database.php';
    $db  = new Database();
    $con = $db->getConnection();

    $kodeMK = $_POST['kodeMK'];
    $namaMK = $_POST['namaMK'];
    $sks    = $_POST['sks'];
    $jam    = $_POST['jam'];

    $stmt = $con->prepare(
        "INSERT INTO t_matakuliah (kodeMK, namaMK, sks, jam) VALUES (?, ?, ?, ?)"
    );

    $stmt->bind_param("isii", $kodeMK, $namaMK, $sks, $jam);
    $stmt->execute();

    if ($stmt->error) {
        die("Gagal menyimpan: " . $stmt->error);
    }

    $stmt->close();
}

header("location: list_matakuliah.php");
exit;
?>
