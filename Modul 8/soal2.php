<?php
$jumlahUang = 1387500;

$pecahan = array(
    100000,
    50000,
    20000,
    10000,
    5000,
    2000,
    500
);

echo "Jumlah Uang: Rp " . number_format($jumlahUang) . "<br><br>";

foreach ($pecahan as $p) {
    $lembar = floor($jumlahUang / $p);
    $jumlahUang %= $p;

    if ($lembar > 0) {
        echo "Pecahan Rp " . number_format($p) . " : " . $lembar . " lembar/keping<br>";
    }
}
?>