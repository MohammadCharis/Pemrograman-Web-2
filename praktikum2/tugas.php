<?php

class Kendaraan
{
    public $nomor;
    public $merk;
    public $jenis;
    public $status = "Tersedia";

    function tampilkanData()
    {
        echo "Nomor : " . $this->nomor . "<br>";
        echo "Merk : " . $this->merk . "<br>";
        echo "Jenis : " . $this->jenis . "<br>";
        echo "Status : " . $this->status . "<br>";
    }

    function statusKendaraan()
    {
        return $this->status;
    }
}

class Pelanggan
{
    public $id;
    public $nama;
    public $alamat;

    function tampilkanData()
    {
        echo "ID : " . $this->id . "<br>";
        echo "Nama : " . $this->nama . "<br>";
        echo "Alamat : " . $this->alamat . "<br>";
    }

    function sewaKendaraan($jenis)
    {
        return "Pelanggan " . $this->nama . " telah menyewa " . $jenis . ".<br>";
    }
}

$kendaraan1 = new Kendaraan();
$kendaraan1->nomor = "B 1234 ABC";
$kendaraan1->merk = "Honda";
$kendaraan1->jenis = "Motor";

$kendaraan2 = new Kendaraan();
$kendaraan2->nomor = "B 5678 DEF";
$kendaraan2->merk = "Toyota";
$kendaraan2->jenis = "Mobil";

$pelanggan1 = new Pelanggan();
$pelanggan1->id = "P001";
$pelanggan1->nama = "Andi";
$pelanggan1->alamat = "Jl. Merdeka No. 1";

$pelanggan2 = new Pelanggan();
$pelanggan2->id = "P002";
$pelanggan2->nama = "Budi";
$pelanggan2->alamat = "Jl. Sudirman No. 2";

echo "Kendaraan<br>";
$kendaraan1->tampilkanData();
echo "<br>";
$kendaraan2->tampilkanData();
echo "<br>";

echo "Pelanggan<br>";
$pelanggan1->tampilkanData();
echo "<br>";
$pelanggan2->tampilkanData();

echo $pelanggan1->sewaKendaraan("Motor");
echo $pelanggan2->sewaKendaraan("Mobil");

?>