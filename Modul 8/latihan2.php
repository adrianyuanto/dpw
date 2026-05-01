<?php
// Variabel dalam PHP
$txt = "Selamat datang";
$txt2 = "Politeknik Negeri Madiun";
$x = 10;
$y = 10.5;

echo "<p>Isi Variable txt adalah: $txt</p>";
echo "<p>Isi Variable x adalah: $x</p>";
echo "<p>Isi Variable y adalah: $y</p>";

echo "Belajar PHP di " . $txt2 . "<br>";
echo "Hasil penjumlahan x + y: " . ($x + $y);

// PHP Konstanta
define("nama_konstanta", "Adrian Yuanto");
echo "<br>Nama: " . nama_konstanta;
?>