<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Hasil Pendaftaran</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<?php
$nama     = $_POST["nama"];
$nim      = $_POST["nim"];
$email    = $_POST["email"];
$tempat   = $_POST["tempat"];
$tgl      = $_POST["tgl_lahir"];
$alamat   = $_POST["alamat"];
$gender   = $_POST["gender"];
?>

<h2>Hasil Pendaftaran</h2>
<b>Selamat datang <?php echo $_POST["nama"]; ?></b><br>
NIM : <?php echo $_POST["nim"]; ?><br>
Email : <?php echo $_POST["email"]; ?><br>
Tempat, Tanggal Lahir : <?php echo $_POST["tempat"]; ?> , <?php echo $_POST["tgl_lahir"]; ?><br>
Alamat : <?php echo $_POST["alamat"]; ?><br>
Jenis Kelamin : <?php echo $_POST["gender"]; ?><br>

<a href="form_pendaftaran.html" class="back-link">← Kembali ke Form</a> |
<a href="index.php" class="back-link">← Kembali ke Beranda</a>

</body>
</html>
