<?php

class Koneksi_db
{
    private $db_host = "localhost";
    private $db_user = "root";
    private $db_pass = "";
    private $db_name = "db_oop";

    private $con = false;
    private $hasil = array();

    public function connect()
    {
        if (!$this->con) {

            $myconn = mysqli_connect(
                $this->db_host,
                $this->db_user,
                $this->db_pass,
                $this->db_name
            );

            if ($myconn) {

                mysqli_set_charset($myconn, "utf8");

                $this->con = true;
                return true;

            } else {

                array_push($this->hasil, mysqli_connect_error());
                return false;
            }

        } else {
            return true;
        }
    }

    public function getStatus()
    {
        return $this->con;
    }

    public function getErrors()
    {
        return $this->hasil;
    }
}

?>