<?php

class akunBank
{
    protected $nomorAkun;
    protected $saldo;
    protected $nama;


    public function __construct($nomorAkun, $nominal)
    {
        $this->nomorAkun = $nomorAkun;
        $this->saldo     = $nominal;
    }


    public function setNama($nama)
    {
        $this->nama = $nama;
    }


    public function getNama()
    {
        return $this->nama;
    }


    public function getAccountNumber()
    {
        return $this->nomorAkun;
    }

    public function tampilkanSaldo()
    {
        return "Saldo Saat Ini : Rp " . number_format($this->saldo);
    }

    public function deposit($jumlah)
    {
        $this->saldo += $jumlah;

        return "Deposit Berhasil : Rp " . number_format($jumlah);
    }

    public function tarik($jumlah)
    {
        if ($jumlah > $this->saldo) {
            return "Gagal! Saldo tidak mencukupi.";
        }

        $this->saldo -= $jumlah;

        return "Penarikan Berhasil : Rp " . number_format($jumlah);
    }

    public function hitungPajak()
    {
        $pajak = $this->saldo * 0.11;

        return "Pajak 11% : Rp " . number_format($pajak);
    }
}

?>