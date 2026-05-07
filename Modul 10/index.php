<?php

require_once('kelas/Manusia.php');

$budi = new Manusia();
$budi->setNama("Budi");
$budi->setNIK("1234567890");
$budi->setUmur(25);

$adrian = new Manusia();
$adrian->setNama("Adrian");
$adrian->setNIK("0987654321");
$adrian->setUmur(19);

?>

<!DOCTYPE html>
<html lang="id">
<head>
    <title>Data Manusia</title>
    <meta charset="utf-8">

<link rel="stylesheet" href="style.css">

</head>

<body>

<header>
    <h1>DATA MANUSIA</h1>
</header>

<section>

<nav>

<ul>
    <li><a href="index.php">Manusia</a></li>
    <li><a href="databank.php">Akun Bank</a></li>
    <li><a href="dataKelas.php">Mahasiswa</a></li>
</ul>

</nav>

<article>

<div class="box">

<h3>Data Budi</h3>

<div class="hasil">Nama : <?= $budi->getNama(); ?></div>
<div class="hasil"><?= $budi->getNIK(); ?></div>
<div class="hasil">Umur : <?= $budi->getUmur(); ?> Tahun</div>

</div>

<div class="box">

<h3>Data Adrian</h3>

<div class="hasil">Nama : <?= $adrian->getNama(); ?></div>
<div class="hasil"><?= $adrian->getNIK(); ?></div>
<div class="hasil">Umur : <?= $adrian->getUmur(); ?> Tahun</div>

</div>

<h3>Kesimpulan</h3>
<ul>
    <li>Class adalah blueprint untuk membuat object.</li>
    <li>Object adalah instance dari class.</li>
    <li>Encapsulation menyembunyikan data agar lebih aman.</li>
</ul>

</article>

</section>

<footer>
<p>copyright@Adrian Yuanto_253307014_2026</p>
</footer>

</body>
</html>