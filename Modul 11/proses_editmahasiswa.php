<?php


if (isset($_POST['edit'])) {
    include 'koneksi.php';

    $nim     = $_POST['nim'];
    $namaMhs = $_POST['namaMhs'];
    $prodi   = $_POST['prodi'];
    $alamat  = $_POST['alamat'];
    $noHP    = $_POST['noHP'];

    $query  = "UPDATE t_mahasiswa SET namaMhs='$namaMhs', prodi='$prodi',
               alamat='$alamat', noHP='$noHP' WHERE nim='$nim'";
    $result = mysqli_query($link, $query);

    if (!$result) {
        die("Query gagal: " . mysqli_errno($link) . " - " . mysqli_error($link));
    }
}

header("location:viewmahasiswa.php");
?>
