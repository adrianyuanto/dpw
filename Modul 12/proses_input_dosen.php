<?php
if (isset($_POST['input'])) {

    require_once 'Database.php';

    $db  = new Database();
    $con = $db->getConnection();

    $namaDosen = $_POST['namaDosen'];
    $noHP      = $_POST['noHP'];

    $stmt = $con->prepare("INSERT INTO t_dosen (idDosen, namaDosen, noHP) VALUES (NULL, ?, ?)");

    $stmt->bind_param("ss", $namaDosen, $noHP);

    $stmt->execute();

    if ($stmt->affected_rows > 0) {
        $stmt->close();
        header("location: list_dosen.php");
        exit;
    } else {
        echo "Gagal menyimpan data: " . $stmt->error;
        $stmt->close();
    }

} else {
    header("location: input_dosen.php");
}
?>
