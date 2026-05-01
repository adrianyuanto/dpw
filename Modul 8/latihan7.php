<?php
$namaBuah = array("Nanas", "Mangga", "Jeruk", "Apel", "Melon", "Manggis");

echo "Saya suka " . $namaBuah[0] . ", " . $namaBuah[1] . ", dan " . $namaBuah[2] . ".<br><br>";

echo "Saya suka " . $namaBuah[1] . "<br>";
echo "Saya suka " . $namaBuah[2] . "<br>";
echo "Saya suka " . $namaBuah[3] . "<br>";
echo "Saya suka " . $namaBuah[4] . "<br><br>";



$umur = array(
    "Andi"  => "35 Tahun",
    "Ben"   => "37 Tahun",
    "Joe"   => "40 Tahun",
    "Ahmad" => "50 Tahun"
);

echo "Umur Andi adalah " . $umur["Andi"] . "<br><br>";


foreach ($umur as $nama => $usia) {
    echo "Umur $nama adalah $usia<br>";
}
?>