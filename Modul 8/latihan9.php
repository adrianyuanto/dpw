<?php
function writeMsg($nama)
{
    echo "Selamat datang " . $nama . "<br>";
}

writeMsg("Adrian");


function tambah(int $angka1, int $angka2)
{
    return $angka1 + $angka2;
}

$hasil = tambah(5, 5);

echo "Hasil penjumlahan: " . $hasil;
?>