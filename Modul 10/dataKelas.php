<?php

require_once('kelas/Mahasiswa.php');

$mhs1 = new mahasiswa("Adrian");

$mhs1->setNIM("253307014");
$mhs1->setJurusan("Teknologi Informasi");
$mhs1->setKelas("TI 2A");
$mhs1->setUmur(20);



?>

<!DOCTYPE html>
<html lang="id">
<head>
    <title>Data Mahasiswa</title>
    <meta charset="utf-8">

    <link rel="stylesheet" href="style.css">

</head>

<body>

<header>
    <h1>DATA MAHASISWA</h1>
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

<h3>Data Mahasiswa</h3>

<div class="hasil">Nama : <?= $mhs1->getNama(); ?></div>
<div class="hasil">NIM : <?= $mhs1->getNim(); ?></div>
<div class="hasil">Jurusan : <?= $mhs1->getJurusan(); ?></div>
<div class="hasil">Kelas : <?= $mhs1->getKelas(); ?></div>
<div class="hasil">Umur : <?= $mhs1->getUmur(); ?></div>

</div>

</article>

</section>

<footer>
    <p>copyright@Adrian Yuanto_253307014_2026</p>
</footer>

</body>
</html>