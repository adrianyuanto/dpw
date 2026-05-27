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
    <title>Tabel Dosen (OOP)</title>
</head>
<body>
    <h1>Tabel Dosen</h1>
    <div class="nav-center">
        <a href="input_dosen.php">Input Data</a>
    </div>

    <div class="search-form">
        <form method="get" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
            <input type="text" name="keyword" placeholder="Cari nama dosen..."
                   value="<?php echo isset($_GET['keyword']) ? htmlspecialchars($_GET['keyword']) : ''; ?>">
            <input type="submit" value="Cari">
            <?php if (!empty($_GET['keyword'])): ?>
                <a href="list_dosen.php">Reset</a>
            <?php endif; ?>
        </form>
    </div>

    <table border="1">
        <tr>
            <th>ID</th>
            <th>Nama Dosen</th>
            <th>No HP</th>
            <th>Pilihan</th>
        </tr>
        <?php
        if (!empty($_GET['keyword'])) {
            $keyword = "%" . $_GET['keyword'] . "%";
            $stmt    = $con->prepare("SELECT * FROM t_dosen WHERE namaDosen LIKE ? ORDER BY idDosen ASC");
            $stmt->bind_param("s", $keyword);
        } else {
            $stmt = $con->prepare("SELECT * FROM t_dosen ORDER BY idDosen ASC");
        }

        $stmt->execute();
        $hasil = $stmt->get_result();

        $jumlah = 0;
        while ($baris = $hasil->fetch_assoc()) {
            $jumlah++;
            echo "<tr>";
            echo "<td>" . htmlspecialchars($baris['idDosen'])   . "</td>";
            echo "<td>" . htmlspecialchars($baris['namaDosen']) . "</td>";
            echo "<td>" . htmlspecialchars($baris['noHP'])      . "</td>";
            echo '<td>
                <a href="edit_dosen.php?idDosen=' . $baris['idDosen'] . '">Edit</a> /
                <a href="hapus_dosen.php?idDosen=' . $baris['idDosen'] . '"
                   onclick="return confirm(\'Anda yakin akan menghapus data?\')">Hapus</a>
              </td>';
            echo "</tr>";
        }

        if ($jumlah === 0) {
            echo '<tr><td colspan="4" style="text-align:center;color:#888;">Tidak ada data</td></tr>';
        }

        $stmt->close();
        ?>
    </table>
    <div class="btn-home-wrapper">
            <a href="index.php" class="btn-home">Kembali ke Menu Utama</a>
        </div>
</body>
</html>
