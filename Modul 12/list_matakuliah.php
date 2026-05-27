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
    <title>Tabel Matakuliah (OOP)</title>
</head>
<body>
    <h1>Tabel Matakuliah</h1>
    <div class="nav-center">
        <a href="input_matakuliah.php">Input Data</a> 
    </div>

    <div class="search-form">
        <form method="get" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
            <input type="text" name="keyword" placeholder="Cari nama matakuliah..."
                   value="<?php echo isset($_GET['keyword']) ? htmlspecialchars($_GET['keyword']) : ''; ?>">
            <input type="submit" value="Cari">
            <?php if (!empty($_GET['keyword'])): ?>
                <a href="list_matakuliah.php">Reset</a>
            <?php endif; ?>
        </form>
    </div>

    <table border="1">
        <tr>
            <th>Kode MK</th>
            <th>Nama Matakuliah</th>
            <th>SKS</th>
            <th>Jam</th>
            <th>Pilihan</th>
        </tr>
        <?php
        if (!empty($_GET['keyword'])) {
            $keyword = "%" . $_GET['keyword'] . "%";
            $stmt    = $con->prepare(
                "SELECT * FROM t_matakuliah WHERE namaMK LIKE ? ORDER BY kodeMK ASC"
            );
            $stmt->bind_param("s", $keyword);
        } else {
            $stmt = $con->prepare("SELECT * FROM t_matakuliah ORDER BY kodeMK ASC");
        }

        $stmt->execute();
        $hasil  = $stmt->get_result();
        $jumlah = 0;

        while ($baris = $hasil->fetch_assoc()) {
            $jumlah++;
            echo "<tr>";
            echo "<td>" . htmlspecialchars($baris['kodeMK']) . "</td>";
            echo "<td>" . htmlspecialchars($baris['namaMK']) . "</td>";
            echo "<td>" . htmlspecialchars($baris['sks'])    . "</td>";
            echo "<td>" . htmlspecialchars($baris['jam'])    . "</td>";
            echo '<td>
                <a href="edit_matakuliah.php?kodeMK=' . $baris['kodeMK'] . '">Edit</a> /
                <a href="hapus_matakuliah.php?kodeMK=' . $baris['kodeMK'] . '"
                   onclick="return confirm(\'Anda yakin akan menghapus data?\')">Hapus</a>
              </td>';
            echo "</tr>";
        }

        if ($jumlah === 0) {
            echo '<tr><td colspan="5" style="text-align:center;color:#888;">Tidak ada data</td></tr>';
        }

        $stmt->close();
        ?>
    </table>
    <div class="btn-home-wrapper">
            <a href="index.php" class="btn-home">Kembali ke Menu Utama</a>
        </div>
</body>
</html>
