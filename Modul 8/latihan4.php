<?php
$t = date("H"); 

echo "<strong>Contoh If:</strong><br>";
if ($t < "16") {
    echo "Selamat siang!<br>";
}

echo "<br><strong>Contoh If Else:</strong><br>";
if ($t < "20") {
    echo "Selamat siang!";
} else {
    echo "Selamat malam!";
}

echo "<br><br><strong>Contoh Nested If:</strong><br>";
if ($t < "11") {
    echo "Selamat Pagi!";
} elseif ($t < "16") {
    echo "Selamat sore!";
} else {
    echo "Selamat Malam!";
}
?>