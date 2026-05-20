<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<h2>Halaman Login</h2>

<?php
/*
 * TUGAS TAMBAHAN:
 * Ubah keterangan error dengan font merah dan ukuran lebih kecil
 */

function bersihkan_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

$name      = "";
$email     = "";
$nameErr   = "";
$emailErr  = "";
$loginMsg  = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Validasi username
    if (empty($_POST["u"])) {
        $nameErr = "masukkan username";
    } else {
        $name = bersihkan_input($_POST["u"]);
    }

    // Validasi password
    if (empty($_POST["p"])) {
        $emailErr = "masukkan password";
    } else {
        $email = bersihkan_input($_POST["p"]);
    }

    if ($nameErr == "" && $emailErr == "") {

        try {

            if ($name === "admin" && $email === "admin123") {
                $loginMsg = "<span class='success'>Login berhasil! Selamat datang, $name.</span>";
            } else {
                throw new Exception("Username atau password salah!");
            }
        } catch (Exception $e) {
            $loginMsg = "<span class='error'>Error: " . $e->getMessage() . "</span>";
        }
    }
}
?>

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
    <table class="no-border">
        <tr>
            <td>Username:</td>
            <td>
                <input type="text" name="u">
                <span class="error">* <?php echo $nameErr; ?></span>
            </td>
        </tr>
        <tr>
            <td>Password:</td>
            <td>
                <input type="password" name="p">
                <span class="error">* <?php echo $emailErr; ?></span>
            </td>
        </tr>
        <tr>
            <td colspan="2">
                <input type="submit" value="Login">
            </td>
        </tr>
    </table>
</form>

<?php echo $loginMsg; ?>

<a href="index.php" class="back-link">← Kembali ke Beranda</a>

</body>
</html>
