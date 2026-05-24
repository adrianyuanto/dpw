<?php
include 'koneksi.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Tabel Matakuliah</title>
</head>
<body>
    <h1>Tabel Matakuliah</h1>
    <div class="nav-center">
    </div>


    <div class="search-form">
        <form method="get" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
            <input type="text" name="keyword" placeholder="Cari nama matakuliah..."
                   value="<?php echo isset($_GET['keyword']) ? htmlspecialchars($_GET['keyword']) : ''; ?>">
            <input type="submit" value="Cari">
            <?php if (isset($_GET['keyword']) && $_GET['keyword'] != ''): ?>
                <a href="viewmatakuliah.php">Reset</a>
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
        if (isset($_GET['keyword']) && $_GET['keyword'] != '') {
            $keyword = mysqli_real_escape_string($link, $_GET['keyword']);
            $query   = "SELECT * FROM t_matakuliah WHERE namaMK LIKE '%$keyword%' ORDER BY kodeMK ASC";
        } else {
            $query = "SELECT * FROM t_matakuliah ORDER BY kodeMK ASC";
        }

        $result = mysqli_query($link, $query);

        if (!$result) {
            die("Query Error: " . mysqli_errno($link) . " - " . mysqli_error($link));
        }

        while ($data = mysqli_fetch_assoc($result)) {
            echo "<tr>";
            echo "<td>" . $data['kodeMK'] . "</td>";
            echo "<td>" . $data['namaMK'] . "</td>";
            echo "<td>" . $data['sks']    . "</td>";
            echo "<td>" . $data['jam']    . "</td>";
            echo '<td>
                <a href="editmatakuliah.php?kodeMK=' . $data['kodeMK'] . '">Edit</a> /
                <a href="hapusmatakuliah.php?kodeMK=' . $data['kodeMK'] . '"
                   onclick="return confirm(\'Anda yakin akan menghapus data?\')">Hapus</a>
              </td>';
            echo "</tr>";
        }

        if (mysqli_num_rows($result) == 0) {
            echo '<tr><td colspan="5" style="text-align:center;color:#888;">Tidak ada data</td></tr>';
        }
        ?>
    </table>
    <div class="btn-home-wrapper">
            <a href="index.php" class="btn-home">Kembali ke Menu Utama</a>
        </div>
</body>
</html>
