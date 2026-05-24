<?php


if (isset($_POST['input'])) {

    include 'koneksi.php';

    $nim     = $_POST['nim'];
    $namaMhs = $_POST['namaMhs'];
    $prodi   = $_POST['prodi'];
    $alamat  = $_POST['alamat'];
    $noHP    = $_POST['noHP'];

    $query  = "INSERT INTO t_mahasiswa VALUES ('$nim','$namaMhs','$prodi','$alamat','$noHP')";
    $result = mysqli_query($link, $query);

    if (!$result) {
        die("Query gagal: " . mysqli_errno($link) . " - " . mysqli_error($link));
    }
}

header("location:viewmahasiswa.php");
?>
