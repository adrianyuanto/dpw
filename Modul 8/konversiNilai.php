<?php
$nilai = 85;

if ($nilai >= 90 && $nilai <= 100) {
    $huruf = "A";
} elseif ($nilai >= 80) {
    $huruf = "AB";
} elseif ($nilai >= 70) {
    $huruf = "B";
} elseif ($nilai >= 60) {
    $huruf = "BC";
} else {
    $huruf = "C";
}

echo "Nilai Angka: " . $nilai . "<br>";
echo "Huruf Nilai: " . $huruf;
?>