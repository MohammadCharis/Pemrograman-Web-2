<?php

class Buku
{
    public $kode;
    public $judul;
    public $penulis;
    public $tahun;

    function tampilkanData()
    {
        echo "Kode : " . $this->kode . "<br>";
        echo "Judul : " . $this->judul . "<br>";
        echo "Penulis : " . $this->penulis . "<br>";
        echo "Tahun : " . $this->tahun . "<br>";
    }
}

$buku1 = new Buku();

$buku1->kode = "BK001";
$buku1->judul = "Belajar Pemrograman PHP";
$buku1->penulis = "Andi";
$buku1->tahun = 2024;

$buku1->tampilkanData();

?>