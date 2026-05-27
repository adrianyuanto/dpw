<?php
$con = new mysqli(
    hostname: "localhost",
    username: "root",
    password: "",
    database: "db_praktik"
);

if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
}

$sql = "INSERT INTO t_dosen (idDosen, namaDosen, noHP) VALUES (18, 'Rahmat Dwi Prasetya', 'rahmat@example.com')";

$hasil = $con->query($sql);

if ($hasil === TRUE) {
    echo "Data dosen berhasil ditambahkan.<br>";
    echo "ID yang baru dibuat: " . $con->insert_id . "<br>";
} else {
    echo "Gagal menambahkan data: " . $con->error;
}

$con->close();
?>
