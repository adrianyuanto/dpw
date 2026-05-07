<?php

require_once "Manusia.php";

class mahasiswa extends Manusia
{
    protected $NIM;
    protected $jurusan;
    protected $kelas;

    public function __construct($nama)
    {
        $this->setNama($nama);
    }

    public function getNim()
    {
        return $this->NIM;
    }

    public function setNIM($nim)
    {
        $this->NIM = $nim;
    }

    public function getJurusan()
    {
        return $this->jurusan;
    }

    public function setJurusan($jurusan)
    {
        $this->jurusan = $jurusan;
    }
    public function getKelas()
    {
        return $this->kelas;
    }

    public function setKelas($kelas)
    {
        $this->kelas = $kelas;
    }
}

?>