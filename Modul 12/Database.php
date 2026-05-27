<?php
class Database
{
    private string $host     = "localhost";
    private string $username = "root";
    private string $password = "";
    private string $dbname   = "db_praktik";
    private mysqli $con;

    public function __construct()
    {
        $this->con = new mysqli(
            $this->host,
            $this->username,
            $this->password,
            $this->dbname
        );

        if ($this->con->connect_error) {
            die("Koneksi database gagal: " . $this->con->connect_error);
        }

        $this->con->set_charset("utf8");
    }

    public function getConnection(): mysqli
    {
        return $this->con;
    }

    public function query(string $sql): mysqli_result|bool
    {
        return $this->con->query($sql);
    }

    public function prepare(string $sql): mysqli_stmt|false
    {
        return $this->con->prepare($sql);
    }

    public function closeConnection(): void
    {
        $this->con->close();
    }

    public function __destruct()
    {
        if (isset($this->con)) {
            $this->con->close();
        }
    }
}
?>
