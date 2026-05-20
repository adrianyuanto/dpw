<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="Belajar PHP">
    <meta name="keywords" content="{tulis nim anda disini}">
    <meta name="author" content="{tulis nama anda disini}">
    <title>Upload File</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<h2>Upload Gambar</h2>

<?php
// Buat folder gambar/ jika belum ada
$target_dir = "gambar/";
if (!is_dir($target_dir)) {
    mkdir($target_dir, 0755, true);
}

if (isset($_POST["submit"])) {

    // Cek apakah file benar-benar dipilih
    if (!isset($_FILES["gambar"]) || $_FILES["gambar"]["error"] === UPLOAD_ERR_NO_FILE) {
        echo "<span class='error'>Pilih file gambar terlebih dahulu!</span><br>";
    } else {

        $target_file = $target_dir . basename($_FILES["gambar"]["name"]);
        $uploadOk    = 1;
        $tipeGambar  = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

        // LANGKAH 1: Cek apakah file berupa gambar sungguhan (bukan file palsu)
        $check = getimagesize($_FILES["gambar"]["tmp_name"]);
        if ($check !== false) {
            echo "File berupa citra/gambar - " . $check["mime"] . ".<br>";
            $uploadOk = 1;
        } else {
            echo "<span class='error'>File bukan gambar.</span><br>";
            $uploadOk = 0;
        }

        // LANGKAH 2: deteksi apakah ada file dengan nama yang sama
        if (file_exists($target_file)) {
            echo "<span class='error'>Sorry, file already exists.</span><br>";
            $uploadOk = 0;
        }

        // LANGKAH 3: Check file size (maks 500KB = 500000 bytes)
        if ($_FILES["gambar"]["size"] > 500000) {
            echo "<span class='error'>Sorry, file anda terlalu besar.</span><br>";
            $uploadOk = 0;
        }

        // LANGKAH 4: Filter format - hanya izinkan jpg, jpeg, png, gif
        if ($tipeGambar != "jpg" && $tipeGambar != "png" && $tipeGambar != "jpeg"
            && $tipeGambar != "gif") {
            echo "<span class='error'>Sorry, hanya file JPG, JPEG, PNG & GIF.</span><br>";
            $uploadOk = 0;
        }

        // LANGKAH 5: Check if $uploadOk telah sesuai dengan kriteria
        if ($uploadOk == 0) {
            echo "<span class='error'>Sorry, File anda gagal upload.</span><br>";
        } else {
            // proses upload file
            if (move_uploaded_file($_FILES["gambar"]["tmp_name"], $target_file)) {
                echo "<span class='success'>File " . htmlspecialchars(basename($_FILES["gambar"]["name"])) . " berhasil Upload.</span><br>";
            } else {
                echo "<span class='error'>Sorry, Ada eror saat upload.</span><br>";
            }
        }
    }
}
?>

<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" enctype="multipart/form-data">
    <p><label>Pilih Gambar yang akan di upload: </label><br>
        <input type="file" name="gambar" id="gambar1" accept="image/*"></p>
    <input type="submit" value="Upload Image" name="submit">
</form>

<p class="mt-20">
    <a href="galery.php">🖼️ Lihat Galeri</a> |
    <a href="index.php" class="back-link">← Kembali ke Beranda</a>
</p>

</body>
</html>
