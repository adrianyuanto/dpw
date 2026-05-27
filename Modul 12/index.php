<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Sistem Informasi OOP - Dashboard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
</head>
<body>

<header>
    <h1>Input Data Dosen, Mahasiswa, dan Matakuliah</h1>
    <p>Modul 12 - PHP Database OOP + Prepared Statement</p>
</header>

<div class="dashboard">

    <div class="card">
        <h2>Data Dosen</h2>
        <p>CRUD dosen dengan OOP &amp; Prepared Statement.</p>
        <div class="btn-group">
            <a href="list_dosen.php"  class="btn btn-view"> Lihat Data</a>
            <a href="input_dosen.php" class="btn btn-input"> Input Data</a>
        </div>
    </div>


    <div class="card">

        <h2>Data Mahasiswa</h2>
        <p>CRUD mahasiswa dengan OOP &amp; Prepared Statement.</p>
        <div class="btn-group">
            <a href="list_mahasiswa.php"  class="btn btn-view"> Lihat Data</a>
            <a href="input_mahasiswa.php" class="btn btn-input"> Input Data</a>
        </div>
    </div>


    <div class="card">
 
        <h2>Data Matakuliah</h2>
        <p>CRUD matakuliah dengan OOP &amp; Prepared Statement.</p>
        <div class="btn-group">
            <a href="list_matakuliah.php"  class="btn btn-view"> Lihat Data</a>
            <a href="input_matakuliah.php" class="btn btn-input"> Input Data</a>
        </div>
    </div>

</div>

<div class="info-box">
    <h3>Perbandingan Modul 11 dan Modul 12</h3>
    <table class="compare-table">
        <tr>
            <th>Operasi</th>
            <th>Modul 11</th>
            <th>Modul 12</th>
        </tr>
        <tr>
            <td class="col-label">Koneksi</td>
            <td>mysqli_connect($h,$u,$p,$db)</td>
            <td>new mysqli($h,$u,$p,$db) atau new Database()</td>
        </tr>
        <tr>
            <td class="col-label">Cek error</td>
            <td>if (!$link)</td>
            <td>if ($con->connect_error)</td>
        </tr>
        <tr>
            <td class="col-label">Query</td>
            <td>mysqli_query($link, $sql)</td>
            <td>$con->query($sql)</td>
        </tr>
        <tr>
            <td class="col-label">Query aman</td>
            <td>— (rentan SQL Injection)</td>
            <td>$con->prepare("... ?") + bind_param()</td>
        </tr>
        <tr>
            <td class="col-label">Fetch baris</td>
            <td>mysqli_fetch_assoc($result)</td>
            <td>$stmt->get_result()->fetch_assoc()</td>
        </tr>
        <tr>
            <td class="col-label">Tutup koneksi</td>
            <td>mysqli_close($link)</td>
            <td>$con->close() atau $db->closeConnection()</td>
        </tr>
        <tr>
            <td class="col-label">Kode tipe bind</td>
            <td>—</td>
            <td>i=integer, s=string, d=double, b=blob</td>
        </tr>
    </table>
</div>

<footer>
    &copy; Adrian Yuanto
</footer>

</body>
</html>
