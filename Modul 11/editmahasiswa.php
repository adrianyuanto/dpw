<?php
include 'koneksi.php';

if (isset($_GET['nim'])) {
    $id     = $_GET['nim'];
    $query  = "SELECT * FROM t_mahasiswa WHERE nim='$id'";
    $result = mysqli_query($link, $query);

    if (!$result) {
        die("Query Error: " . mysqli_errno($link) . " - " . mysqli_error($link));
    }

    $data    = mysqli_fetch_assoc($result);
    $nim     = $data['nim'];
    $namaMhs = $data['namaMhs'];
    $prodi   = $data['prodi'];
    $alamat  = $data['alamat'];
    $noHP    = $data['noHP'];

} else {
    header("location:viewmahasiswa.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Edit Data Mahasiswa</title>
</head>
<body>
    <h1>Edit Data Mahasiswa</h1>
    <div class="container">
        <div class="nav-link">
            <a href="viewmahasiswa.php">← Kembali ke Daftar Mahasiswa</a>
        </div>
        <div class="btn-home-wrapper">
            <a href="index.php" class="btn-home">Kembali ke Menu Utama</a>
        </div>
        <form action="proses_editmahasiswa.php" method="post">
            <fieldset>
                <legend><b>Edit Data Mahasiswa</b></legend>
                <p>
                    <label>NIM :</label>
                    <input type="hidden" name="nim" value="<?php echo $nim; ?>">
                    <input type="text" value="<?php echo $nim; ?>" disabled>
                </p>
                <p>
                    <label for="namaMhs">Nama :</label>
                    <input type="text" name="namaMhs" id="namaMhs" value="<?php echo $namaMhs; ?>">
                </p>
                <p>
                    <label for="prodi">Prodi :</label>
                    <input type="text" name="prodi" id="prodi" value="<?php echo $prodi; ?>">
                </p>
                <p>
                    <label for="alamat">Alamat :</label>
                    <input type="text" name="alamat" id="alamat" value="<?php echo $alamat; ?>">
                </p>
                <p>
                    <label for="noHP">No HP :</label>
                    <input type="text" name="noHP" id="noHP" value="<?php echo $noHP; ?>">
                </p>
            </fieldset>
            <p>
                <input type="submit" name="edit" value="Update Data">
            </p>
        </form>
    </div>
</body>
</html>
