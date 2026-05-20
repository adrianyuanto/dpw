<?php
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["simpan"])) {
    $nama  = htmlspecialchars(trim($_POST["nama"]));
    $nim   = htmlspecialchars(trim($_POST["nim"]));
    $email = htmlspecialchars(trim($_POST["email"]));
    setcookie("c_nama",  $nama,  time() + (30 * 24 * 3600), "/");
    setcookie("c_nim",   $nim,   time() + (30 * 24 * 3600), "/");
    setcookie("c_email", $email, time() + (30 * 24 * 3600), "/");
    header("Location: cookies.php");
    exit;
}
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["hapus"])) {
    setcookie("c_nama",  "", time() - 3600, "/");
    setcookie("c_nim",   "", time() - 3600, "/");
    setcookie("c_email", "", time() - 3600, "/");
    header("Location: cookies.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Cookies - Identitas</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<h2>Latihan 6 - Cookies</h2>

<?php if (isset($_COOKIE["c_nama"])): ?>
    <div class="info-box">
        <strong>✅ Data Tersimpan di Cookie:</strong><br><br>
        Nama: <strong><?php echo htmlspecialchars($_COOKIE["c_nama"]); ?></strong><br>
        NIM: <strong><?php echo htmlspecialchars($_COOKIE["c_nim"]); ?></strong><br>
        Email: <strong><?php echo htmlspecialchars($_COOKIE["c_email"]); ?></strong><br><br>
        <small>Cookie berlaku 30 hari.</small>
    </div>
    <form method="post">
        <button type="submit" name="hapus" class="btn btn-danger">🗑 Hapus Cookie</button>
    </form>
    <hr>
    <p>Perbarui data identitas:</p>
<?php else: ?>
    <p>Belum ada data cookie. Isi form berikut:</p>
<?php endif; ?>

<form method="post">
    <table class="no-border">
        <tr><td>Nama:</td><td><input type="text" name="nama" value="<?php echo isset($_COOKIE['c_nama']) ? $_COOKIE['c_nama'] : ''; ?>" placeholder="Nama lengkap"></td></tr>
        <tr><td>NIM:</td><td><input type="text" name="nim" value="<?php echo isset($_COOKIE['c_nim']) ? $_COOKIE['c_nim'] : ''; ?>" placeholder="NIM"></td></tr>
        <tr><td>Email:</td><td><input type="email" name="email" value="<?php echo isset($_COOKIE['c_email']) ? $_COOKIE['c_email'] : ''; ?>" placeholder="email@contoh.com"></td></tr>
        <tr><td colspan="2"><button type="submit" name="simpan">💾 Simpan ke Cookie</button></td></tr>
    </table>
</form>

<a href="index.php" class="back-link">← Kembali ke Beranda</a>
</body>
</html>
