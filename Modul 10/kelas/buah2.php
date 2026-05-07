<?php

class buah2
{
    public $nama;
    public $warna;
    public $bobot;

    public function set_name($n)
    {
        $this->nama = $n;
    }

    public function set_color($n)
    {
        $this->warna = $n;
    }

    public function set_weight($n)
    {
        $this->bobot = $n;
    }
}

$mango = new buah2();

$mango->set_name("Mango");
$mango->set_color("Yellow");
$mango->set_weight(300);

?>

<!DOCTYPE html>
<html lang="id">
<head>
    <title>Data Buah 2</title>
    <meta charset="utf-8">

    <link rel="stylesheet" href="style.css">

</head>

<body>

<header>
    <h1>DATA BUAH 2</h1>
</header>

<section>

<nav>

<ul>
    <li><a href="buah.php">Buah</a></li>
    <li><a href="buah2.php">Buah 2</a></li>
</ul>

</nav>

<article>

<div class="box">

<h3>Data Buah</h3>

<div class="hasil">Nama : <?= $mango->nama; ?></div>
<div class="hasil">Warna : <?= $mango->warna; ?></div>
<div class="hasil">Bobot : <?= $mango->bobot; ?> gram</div>

</div>

<div class="box">

<h3>Kesimpulan</h3>

<div class="hasil">1. Method public dapat dipanggil dari luar class.</div>
<div class="hasil">2. Protected dan private tidak bisa dipanggil langsung.</div>
<div class="hasil">3. Access modifier berlaku pada method dan properti.</div>

</div>

</article>

</section>

<footer>
<p>copyright@Adrian Yuanto_253307014_2026</p>
</footer>

</body>
</html>