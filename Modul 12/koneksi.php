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

$con->set_charset("utf8");
?>
