<?php
include 'koneksi.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Tabel Mahasiswa</title>
</head>
<body>
    <h1>Tabel Mahasiswa</h1>
    <div class="nav-center">
    </div>


    <div class="search-form">
        <form method="get" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
            <input type="text" name="keyword" placeholder="Cari nama mahasiswa..."
                   value="<?php echo isset($_GET['keyword']) ? htmlspecialchars($_GET['keyword']) : ''; ?>">
            <input type="submit" value="Cari">
            <?php if (isset($_GET['keyword']) && $_GET['keyword'] != ''): ?>
                <a href="viewmahasiswa.php">Reset</a>
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
        
        if (isset($_GET['keyword']) && $_GET['keyword'] != '') {
            $keyword = mysqli_real_escape_string($link, $_GET['keyword']);
            $query   = "SELECT * FROM t_mahasiswa WHERE namaMhs LIKE '%$keyword%' ORDER BY nim ASC";
        } else {
            $query = "SELECT * FROM t_mahasiswa ORDER BY nim ASC";
        }

        $result = mysqli_query($link, $query);

        if (!$result) {
            die("Query Error: " . mysqli_errno($link) . " - " . mysqli_error($link));
        }

        while ($data = mysqli_fetch_assoc($result)) {
            echo "<tr>";
            echo "<td>" . $data['nim']     . "</td>";
            echo "<td>" . $data['namaMhs'] . "</td>";
            echo "<td>" . $data['prodi']   . "</td>";
            echo "<td>" . $data['alamat']  . "</td>";
            echo "<td>" . $data['noHP']    . "</td>";
            echo '<td>
                <a href="editmahasiswa.php?nim=' . $data['nim'] . '">Edit</a> /
                <a href="hapusmahasiswa.php?nim=' . $data['nim'] . '"
                   onclick="return confirm(\'Anda yakin akan menghapus data?\')">Hapus</a>
              </td>';
            echo "</tr>";
        }

        if (mysqli_num_rows($result) == 0) {
            echo '<tr><td colspan="6" style="text-align:center;color:#888;">Tidak ada data</td></tr>';
        }
        ?>
    </table>
    <div class="btn-home-wrapper">
            <a href="index.php" class="btn-home">Kembali ke Menu Utama</a>
        </div>
</body>
</html>
