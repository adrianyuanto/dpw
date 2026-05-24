<?php


include("koneksi.php");

if (isset($_GET['nim'])) {
    $id          = $_GET['nim'];
    $query       = "DELETE FROM t_mahasiswa WHERE nim='$id'";
    $hasil_query = mysqli_query($link, $query);

    if (!$hasil_query) {
        die("Gagal menghapus data: " . mysqli_errno($link) . " - " . mysqli_error($link));
    }
}

header("location:viewmahasiswa.php");
?>
