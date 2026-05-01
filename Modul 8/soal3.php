<?php
$siswa = array(
    1 => array("Poin" => 75, "Nama" => "Adi"),
    2 => array("Poin" => 80, "Nama" => "Joni"),
    3 => array("Poin" => 65, "Nama" => "Jihan"),
    4 => array("Poin" => 70, "Nama" => "Aya"),
    5 => array("Poin" => 85, "Nama" => "Ita"),
    6 => array("Poin" => 90, "Nama" => "Budi"),
    7 => array("Poin" => 95, "Nama" => "Tini"),
    8 => array("Poin" => 65, "Nama" => "Sari")
);

echo "Poin siswa nomor 5 (" . $siswa[5]["Nama"] . "): " . $siswa[5]["Poin"] . "<br><br>";


echo "Siswa dengan poin 90: ";

foreach ($siswa as $s) {
    if ($s["Poin"] == 90) {
        echo $s["Nama"];
    }
}

echo "<br><br>";


echo "Siswa dengan poin 100: ";

$found = false;

foreach ($siswa as $s) {
    if ($s["Poin"] == 100) {
        echo $s["Nama"];
        $found = true;
    }
}

if (!$found) {
    echo "Tidak ada";
}
?>