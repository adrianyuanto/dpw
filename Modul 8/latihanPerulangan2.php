<?php
$angka = array(12, 13, 15, 16, 67, 189, 346, 876, 542, 325);

foreach ($angka as $val) {
    $status = ($val % 2 == 0) ? "Genap" : "Ganjil";

    echo "Nomor: " . $val . " - " . $status . "<br>";
}
?>