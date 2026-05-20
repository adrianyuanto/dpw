<?php
session_start();

if (isset($_GET["logout"])) {
    session_unset();
    session_destroy();
    header("Location: session_login.php");
    exit;
}

function bersihkan_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

$loginErr = "";
$usernameErr = "";
$passwordErr = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    try {
        if (empty($_POST["u"])) {
            $usernameErr = "Username wajib diisi!";
            throw new Exception("Validasi gagal: username kosong.");
        }
        if (empty($_POST["p"])) {
            $passwordErr = "Password wajib diisi!";
            throw new Exception("Validasi gagal: password kosong.");
        }

        $username = bersihkan_input($_POST["u"]);
        $password = bersihkan_input($_POST["p"]);

        $valid_users = [
            "admin"     => "admin123",
            "mahasiswa" => "kampus2024",
        ];

        if (!array_key_exists($username, $valid_users)) {
            throw new Exception("Username '$username' tidak ditemukan!");
        }
        if ($valid_users[$username] !== $password) {
            throw new Exception("Password salah untuk user '$username'!");
        }

        $_SESSION["login"]    = true;
        $_SESSION["username"] = $username;
        $_SESSION["waktu"]    = date("d-m-Y H:i:s");

        header("Location: session_login.php");
        exit;

    } catch (Exception $e) {
        $loginErr = $e->getMessage();
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login dengan Session</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<h2>Latihan 7 & 8 - Session + Exception Handling</h2>

<?php if (isset($_SESSION["login"]) && $_SESSION["login"] === true): ?>
    <div class="success-box">
        <h3>✅ Login Berhasil!</h3>
        <p>Selamat datang, <strong><?php echo htmlspecialchars($_SESSION["username"]); ?></strong>!</p>
        <p>Waktu login: <?php echo $_SESSION["waktu"]; ?></p>
        <p>Session ID: <code><?php echo session_id(); ?></code></p>
        <br>
        <a href="session_login.php?logout=1" class="btn btn-danger">🔓 Logout</a>
    </div>
<?php else: ?>
    <div class="login-box">
        <h3>🔐 Login</h3>

        <?php if ($loginErr != ""): ?>
            <div class="alert-error">⚠️ <?php echo $loginErr; ?></div>
        <?php endif; ?>

        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
            Username:<br>
            <input type="text" name="u" placeholder="contoh: admin">
            <span class="error"><?php echo $usernameErr; ?></span><br><br>
            Password:<br>
            <input type="password" name="p" placeholder="contoh: admin123">
            <span class="error"><?php echo $passwordErr; ?></span><br><br>
            <input type="submit" value="Login">
        </form>
        <br>
        <small>Akun demo: <b>admin</b> / <b>admin123</b> &nbsp;|&nbsp; <b>mahasiswa</b> / <b>kampus2024</b></small>
    </div>
<?php endif; ?>

<a href="index.php" class="back-link">← Kembali ke Beranda</a>
</body>
</html>
