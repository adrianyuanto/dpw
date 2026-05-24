<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistem Informasi - Dashboard</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<header>
    <h1>Input Data Dosen, Mahasiswa, dan Matakuliah</h1>
    <p>Modul 11 - PHP Database CRUD | Praktikum Desain dan Pemrograman Web</p>
</header>

<div class="dashboard">


    <div class="card">

        <h2>Data Dosen</h2>
        <p>Kelola data dosen: tambah, lihat, ubah, dan hapus.</p>
        <div class="btn-group">
            <a href="viewdosen.php"  class="btn btn-view">Lihat Data</a>
            <a href="input.php"      class="btn btn-input">Input Data</a>
        </div>
    </div>

    
    <div class="card">

        <h2>Data Mahasiswa</h2>
        <p>Kelola data mahasiswa: tambah, lihat, ubah, dan hapus.</p>
        <div class="btn-group">
            <a href="viewmahasiswa.php"  class="btn btn-view">Lihat Data</a>
            <a href="inputmahasiswa.php" class="btn btn-input">Input Data</a>
        </div>
    </div>


    <div class="card">

        <h2>Data Matakuliah</h2>
        <p>Kelola data matakuliah: tambah, lihat, ubah, dan hapus.</p>
        <div class="btn-group">
            <a href="viewmatakuliah.php"  class="btn btn-view">Lihat Data</a>
            <a href="inputmatakuliah.php" class="btn btn-input">Input Data</a>
        </div>
    </div>

</div>

<footer>
    &copy; Adrian Yuanto &mdash; Praktikum P11
</footer>

</body>
</html>
