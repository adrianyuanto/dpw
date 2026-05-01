<?php
$warna = "hijau";

switch ($warna) {
    case "merah":
        echo "<h2 style='color:red;'>Warnanya adalah merah</h2>";
        break;
    case "kuning":
        echo "<h2 style='color:gold;'>Warnanya adalah kuning</h2>";
        break;
    case "hijau":
        echo "<h2 style='color:green;'>Warnanya adalah hijau</h2>";
        break;
    default:
        echo "<h2>Warnanya tidak dikenal!</h2>";
}
?>