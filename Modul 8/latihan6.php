<?php

echo "While Loop:<br>";
$x = 1;
while ($x <= 5) {
    echo "Nomor: $x <br>";
    $x++;
}

echo "<br>Do While:<br>";
$x = 1;
do {
    echo "Nomor: $x <br>";
    $x++;
} while ($x <= 5);

echo "<br>Foreach:<br>";
$colors = array("red", "green", "blue", "yellow");
foreach ($colors as $value) {
    echo "$value <br>";
}

echo "<br>For dengan Break:<br>";
for ($x = 0; $x < 10; $x++) {
    if ($x == 4) break;
    echo "Nomor $x <br>";
}
?>