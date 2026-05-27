<?php
require_once 'Database.php';
$db  = new Database();
$con = $db->getConnection();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Tabel Mahasiswa (OOP)</title>
</head>
<body>
    <h1>Tabel Mahasiswa</h1>
    <div class="nav-center">
        <a href="input_mahasiswa.php">Input Data</a> 
    </div>

    <div class="search-form">
        <form method="get" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
            <input type="text" name="keyword" placeholder="Cari nama mahasiswa..."
                   value="<?php echo isset($_GET['keyword']) ? htmlspecialchars($_GET['keyword']) : ''; ?>">
            <input type="submit" value="Cari">
            <?php if (!empty($_GET['keyword'])): ?>
                <a href="list_mahasiswa.php">Reset</a>
            <?php endif; ?>
        </form>
    </div>

    <table border="1">
        <tr>
            <th>NIM</th>
            <th>Nama Mahasiswa</th>
            <th>Prodi</th>
            <th>Alamat</th>
            <th>No HP</th>
            <th>Pilihan</th>
        </tr>
        <?php
        if (!empty($_GET['keyword'])) {
            $keyword = "%" . $_GET['keyword'] . "%";
            $stmt    = $con->prepare("SELECT * FROM t_mahasiswa WHERE namaMhs LIKE ? ORDER BY nim ASC");
            $stmt->bind_param("s", $keyword);
        } else {
            $stmt = $con->prepare("SELECT * FROM t_mahasiswa ORDER BY nim ASC");
        }

        $stmt->execute();
        $hasil  = $stmt->get_result();
        $jumlah = 0;

        while ($baris = $hasil->fetch_assoc()) {
            $jumlah++;
            echo "<tr>";
            echo "<td>" . htmlspecialchars($baris['nim'])     . "</td>";
            echo "<td>" . htmlspecialchars($baris['namaMhs']) . "</td>";
            echo "<td>" . htmlspecialchars($baris['prodi'])   . "</td>";
            echo "<td>" . htmlspecialchars($baris['alamat'])  . "</td>";
            echo "<td>" . htmlspecialchars($baris['noHP'])    . "</td>";
            echo '<td>
                <a href="edit_mahasiswa.php?nim=' . $baris['nim'] . '">Edit</a> /
                <a href="hapus_mahasiswa.php?nim=' . $baris['nim'] . '"
                   onclick="return confirm(\'Anda yakin akan menghapus data?\')">Hapus</a>
              </td>';
            echo "</tr>";
        }

        if ($jumlah === 0) {
            echo '<tr><td colspan="6" style="text-align:center;color:#888;">Tidak ada data</td></tr>';
        }

        $stmt->close();
        ?>
    </table>
    <div class="btn-home-wrapper">
            <a href="index.php" class="btn-home">Kembali ke Menu Utama</a>
        </div>
</body>
</html>
