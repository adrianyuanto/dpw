<?php
include 'koneksi.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Tabel Dosen</title>
</head>
<body>
    <h1>Tabel Dosen</h1>

    <div class="nav-center">
    </div>

    <div class="search-form">
        <form method="get" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
            <input type="text" name="keyword" placeholder="Cari nama dosen..."
                   value="<?php echo isset($_GET['keyword']) ? htmlspecialchars($_GET['keyword']) : ''; ?>">
            <input type="submit" value="Cari">
            <?php if (isset($_GET['keyword']) && $_GET['keyword'] != ''): ?>
                <a href="viewdosen.php">Reset</a>
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

        if (isset($_GET['keyword']) && $_GET['keyword'] != '') {
            $keyword = mysqli_real_escape_string($link, $_GET['keyword']);
            $query   = "SELECT * FROM t_dosen WHERE namaDosen LIKE '%$keyword%' ORDER BY idDosen ASC";
        } else {
            $query = "SELECT * FROM t_dosen ORDER BY idDosen ASC";
        }

        $result = mysqli_query($link, $query);

        if (!$result) {
            die("Query Error: " . mysqli_errno($link) .
                " - " . mysqli_error($link));
        }

        while ($data = mysqli_fetch_assoc($result))
        {
            echo "<tr>";
            echo "<td>" . $data['idDosen']   . "</td>";
            echo "<td>" . $data['namaDosen'] . "</td>";
            echo "<td>" . $data['noHP']      . "</td>";
            echo '<td>
                <a href="editdosen.php?idDosen=' . $data['idDosen'] . '">Edit</a> /
                <a href="hapusdosen.php?idDosen=' . $data['idDosen'] . '"
                   onclick="return confirm(\'Anda yakin akan menghapus data?\')">Hapus</a>
              </td>';
            echo "</tr>";
        }

        if (mysqli_num_rows($result) == 0) {
            echo '<tr><td colspan="4" style="text-align:center;color:#888;">
                    Tidak ada data' .
                    (isset($_GET['keyword']) ? ' untuk keyword "<b>' . htmlspecialchars($_GET['keyword']) . '</b>"' : '') .
                 '</td></tr>';
        }
        ?>
    </table>
    <div class="btn-home-wrapper">
            <a href="index.php" class="btn-home">Kembali ke Menu Utama</a>
        </div>
</body>
</html>
