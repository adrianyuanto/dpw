<?php
$array = array(
    "1C" => array("Udin", "Ismail", "Adi"),
    "1D" => array("Lukman", "Fajri", "Mahmud")
);

print_r($array);
echo "<br><br>";


print_r($array["1C"]);
echo "<br><br>";


echo "Siswa pertama di 1C: " . $array["1C"][0] . "<br>";


echo "Tampilkan Fajri: " . $array["1D"][1] . "<br>";
echo "Tampilkan Adi: " . $array["1C"][2] . "<br>";
?>