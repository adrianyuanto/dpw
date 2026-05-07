<?php

class buah
{
    public $nama;
    protected $warna;
    private $berat;

    // Getter Setter warna
    public function getWarna()
    {
        return $this->warna;
    }

    public function setWarna($warna)
    {
        $this->warna = $warna;
    }

    // Getter Setter berat
    public function getBerat()
    {
        return $this->berat;
    }

    public function setBerat($berat)
    {
        $this->berat = $berat;
    }
}

// Membuat object
$mango = new buah();

$mango->nama = "Mango";
$mango->setWarna("Yellow");
$mango->setBerat(300);

?>

<!DOCTYPE html>
<html lang="id">
<head>
    <title>Data Buah</title>
    <meta charset="utf-8">

    <link rel="stylesheet" href="style.css">

</head>

<body>

<header>
    <h1>DATA BUAH</h1>
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
<div class="hasil">Warna : <?= $mango->getWarna(); ?></div>
<div class="hasil">Berat : <?= $mango->getBerat(); ?> gram</div>

</div>

<div class="box">

<h3>Kesimpulan</h3>

<div class="hasil">1. Public dapat diakses langsung.</div>
<div class="hasil">2. Protected menggunakan getter/setter.</div>
<div class="hasil">3. Private hanya bisa diakses dalam class.</div>

</div>

</article>

</section>

<footer>
<p>copyright@Adrian Yuanto_253307014_2026</p>
</footer>

</body>
</html>