<?php

require_once('kelas/akunBank.php');

$data1 = new akunBank(nomorAkun: "001", nominal: 1000000000);
$data1->setNama("Adrian Yuanto");

$data2 = new akunBank(nomorAkun: "002", nominal: 10000);
$data2->setNama("Budi Santoso");

?>

<!DOCTYPE html>
<html lang="id">
<head>
    <title>Data Akun Bank</title>
    <meta charset="utf-8">

    <link rel="stylesheet" href="style.css">

</head>

<body>

<header>
    <h1>DATA AKUN BANK</h1>
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

<h3><?= $data1->getAccountNumber(); ?> - <?= $data1->getNama(); ?></h3>

<div class="hasil"><?= $data1->tampilkanSaldo(); ?></div>
<div class="hasil"><?= $data1->deposit(5000000); ?></div>
<div class="hasil"><?= $data1->tampilkanSaldo(); ?></div>
<div class="hasil"><?= $data1->tarik(9000000); ?></div>
<div class="hasil"><?= $data1->tampilkanSaldo(); ?></div>
<div class="hasil"><?= $data1->hitungPajak(); ?></div>

</div>

<div class="box">

<h3><?= $data2->getAccountNumber(); ?> - <?= $data2->getNama(); ?></h3>

<div class="hasil"><?= $data2->tampilkanSaldo(); ?></div>
<div class="hasil"><?= $data2->deposit(20000); ?></div>
<div class="hasil"><?= $data2->tampilkanSaldo(); ?></div>
<div class="hasil"><?= $data2->tarik(50000); ?></div>
<div class="hasil"><?= $data2->tampilkanSaldo(); ?></div>
<div class="hasil"><?= $data2->hitungPajak(); ?></div>

</div>

<h3>Kesimpulan</h3>
<ul>
    <li>Object bisa dibuat lebih dari satu.</li>
    <li>deposit() untuk menambah saldo.</li>
    <li>tarik() untuk mengurangi saldo.</li>
    <li>Saldo tidak boleh minus.</li>
    <li>hitungPajak() menghitung pajak 11%.</li>
</ul>

</article>

</section>

<footer>
    <p>copyright@Adrian Yuanto_253307014_2026</p>
</footer>

</body>
</html>