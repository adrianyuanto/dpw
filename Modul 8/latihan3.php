<?php
$x = 5;
$y = 10;

// Arithmetic operators
echo "Penambahan: " . ($x + $y) . "<br>";
echo "Pengurangan: " . ($x - $y) . "<br>";
echo "Perkalian: " . ($x * $y) . "<br>";
echo "Pembagian: " . ($x / $y) . "<br>";
echo "Modulus: " . ($x % $y) . "<br>";
echo "Exponensial: " . ($x ** $y) . "<br><br>";

// Assignment operators
$x += 2; // $x = 5 + 2
$y *= 2; // $y = 10 * 2
echo "Penambahan x: " . $x . "<br>";
echo "Perkalian y: " . $y . "<br><br>";

// Increment/Decrement
echo "Isi ++x = " . ++$x . "<br>"; // Pre-increment
echo "Isi x++ = " . $x++ . "<br>"; // Post-increment
echo "Isi x akhir = " . $x . "<br><br>";

// Conditional assignment
$user = "Andi Darmawan";
$status = (empty($user)) ? "Kosong" : "Ada isi";
echo "Status: " . $status . "<br>";

echo "Color: " . ($color = $color ?? "red");

echo "<hr>";
echo "<h3>Jawaban Pertanyaan:</h3>";
echo "<strong>Apa perbedaan \$x++ dan ++\$x ??</strong><br><br>";

echo "Perbedaannya terletak pada urutan eksekusi penambahan nilainya:<br>";
echo "1. <strong>++\$x (Pre-increment):</strong> Nilai variabel ditambah 1 terlebih dahulu, kemudian nilai baru tersebut dikembalikan atau digunakan dalam operasi.<br>";
echo "2. <strong>\$x++ (Post-increment):</strong> Nilai variabel yang sekarang digunakan terlebih dahulu dalam operasi, baru kemudian nilainya ditambah 1.";
?>
