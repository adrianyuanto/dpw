<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Latihan JSON</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<h2>Latihan 9 - Array, JSON, dan Tampilan Data</h2>

<?php
$mahasiswa = [
    ["nama" => "Haki Eko Saputra",      "umur" => 18],
    ["nama" => "Adrian Yuanto",     "umur" => 18],
    ["nama" => "Muhammad Faizal",       "umur" => 19],
    ["nama" => "Angga Dwi Saputro",     "umur" => 18],
    ["nama" => "Fadhiel Fauzi",     "umur" => 18],
    ["nama" => "Fauzy Ahmad",     "umur" => 19],
    ["nama" => "Muhammad Saputra",  "umur" => 19],
    ["nama" => "Aris Mustain",     "umur" => 18],
    ["nama" => "Ferdinand Andreas",    "umur" => 19],
    ["nama" => "Syafi Arkan",      "umur" => 18],
];

$jsonString = json_encode($mahasiswa, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE);
$arrayKembali = json_decode($jsonString, true);
?>

<div class="section">
    <h3>1. Data Array PHP (<?php echo count($mahasiswa); ?> data)</h3>
    <table>
        <tr><th>No</th><th>Nama</th><th>Umur</th></tr>
        <?php foreach ($mahasiswa as $i => $mhs): ?>
        <tr>
            <td><?php echo $i + 1; ?></td>
            <td><?php echo htmlspecialchars($mhs["nama"]); ?></td>
            <td><?php echo $mhs["umur"]; ?> tahun</td>
        </tr>
        <?php endforeach; ?>
    </table>
</div>

<div class="section">
    <h3>2. Hasil json_encode() → String JSON</h3>
    <p>Fungsi <code>json_encode()</code> mengubah array PHP menjadi format JSON:</p>
    <pre><?php echo htmlspecialchars($jsonString); ?></pre>
</div>

<div class="section">
    <h3>3. Hasil json_decode() → Array PHP (ditampilkan ulang)</h3>
    <p>Fungsi <code>json_decode($json, true)</code> mengubah string JSON kembali menjadi array PHP:</p>
    <table>
        <tr><th>No</th><th>Nama</th><th>Umur</th></tr>
        <?php foreach ($arrayKembali as $i => $mhs): ?>
        <tr>
            <td><?php echo $i + 1; ?></td>
            <td><?php echo htmlspecialchars($mhs["nama"]); ?></td>
            <td><?php echo $mhs["umur"]; ?> tahun</td>
        </tr>
        <?php endforeach; ?>
    </table>
    <br>
    <small>✅ Data berhasil dikonversi: PHP Array → JSON → PHP Array kembali tanpa kehilangan data.</small>
</div>

<div class="section">
    <h3>4. Informasi JSON</h3>
    <p>Panjang string JSON : <strong><?php echo strlen($jsonString); ?> karakter</strong></p>
    <p>Jumlah data decoded : <strong><?php echo count($arrayKembali); ?> item</strong></p>
    <p>Rata-rata umur : <strong>
        <?php
        $totalUmur = array_sum(array_column($mahasiswa, "umur"));
        echo round($totalUmur / count($mahasiswa), 1);
        ?> tahun
    </strong></p>
</div>

<a href="index.php" class="back-link">← Kembali ke Beranda</a>

</body>
</html>
