<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Form Komentar</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<h2>Form Komentar</h2>

<?php

function bersihkan_input($data) {
    $data = trim($data);          
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

$name    = $email   = $comment = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name    = bersihkan_input($_POST["name"]);
    $email   = bersihkan_input($_POST["email"]);
    $comment = bersihkan_input($_POST["comment"]);

    echo "<div class='info-box'>";
    echo "Nama : " . $name . "<br>";
    echo "Email : " . $email . "<br>";
    echo "Komentar : " . $comment . "<br>";
    echo "</div>";
}
?>

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
    <table class="no-border">
        <tr>
            <td>Nama:</td>
            <td><input type="text" name="name"></td>
        </tr>
        <tr>
            <td>E-mail:</td>
            <td><input type="email" name="email"></td>
        </tr>
        <tr>
            <td>Komentar:</td>
            <td><textarea name="comment" rows="5" cols="40"></textarea></td>
        </tr>
        <tr>
            <td colspan="2">
                <input type="submit" value="Simpan">
                <input type="reset" value="Bersihkan">
            </td>
        </tr>
    </table>
</form>

<a href="index.php" class="back-link">← Kembali ke Beranda</a>

</body>
</html>
