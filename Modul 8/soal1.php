<?php
$gajiPokok = 3250000;
$tunjangan = 1200000;

$gajiKotor = $gajiPokok + $tunjangan;
$pajak = 0.1 * $gajiKotor;
$gajiBersih = $gajiKotor - $pajak;

echo "Gaji Bersih Obi: Rp " . number_format($gajiBersih, 0, ",", ".");
?>