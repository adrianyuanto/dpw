<?php

class Manusia
{
    protected $nama;
    protected $NIK;
    protected $umur;

    public function getNama()
    {
        return $this->nama;
    }

    public function setNama($nama)
    {
        $this->nama = $nama;
    }

    public function getNIK()
    {
        return "NIK : {$this->NIK}";
    }
    public function setNIK($NIK)
    {
        $this->NIK = $NIK;
    }           
    public function getUmur()
    {
        return $this->umur;
    }

    public function setUmur($umur)
    {
        $this->umur = $umur;
    }
}

?>