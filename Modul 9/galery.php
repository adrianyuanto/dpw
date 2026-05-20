<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Galeri Gambar</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<h2>Galeri Gambar</h2>

<?php
$target_dir = "gambar/";
if (!is_dir($target_dir)) {
    mkdir($target_dir, 0755, true);
}

$fileList = glob('gambar/*');

$ekstensi_gambar = ['jpg', 'jpeg', 'png', 'gif', 'webp'];

$ada_gambar = false;

echo '<div class="galeri">';

if ($fileList) {
    foreach ($fileList as $filename) {
        if (is_file($filename)) {
            $ext = strtolower(pathinfo($filename, PATHINFO_EXTENSION));

            if (in_array($ext, $ekstensi_gambar)) {
                $ada_gambar = true;
                $namaFile   = basename($filename);
                echo '
                <div class="galeri-item">
                    <img src="' . htmlspecialchars($filename) . '" alt="' . htmlspecialchars($namaFile) . '">
                    <p>' . htmlspecialchars($namaFile) . '</p>
                </div>';
            }
        }
    }
}

echo '</div>';

if (!$ada_gambar) {
    echo '<p style="color:#888; margin-top:20px;">Belum ada gambar di folder. Silakan upload gambar terlebih dahulu.</p>';
}
?>

<p class="mt-20">
    <a href="upload_gambar.php">⬆️ Upload Gambar Baru</a> |
    <a href="index.php" class="back-link">← Kembali ke Beranda</a>
</p>

</body>
</html>
