<?php
class Produk {
    public $kode;
    public $nama;
    public $harga;
    public $stok;
    public $diskon;

    public function __construct(
        $kode,
        $nama,
        $harga,
        $stok,
        $diskon = 10
    ) {

        $this->kode = $kode;
        $this->nama = $nama;
        $this->harga = $harga;
        $this->stok = $stok;
        $this->diskon = $diskon;
    }
     public function hitungNilaiStok() {
        return $this->harga * $this->stok;
    }
     public function hitungPotongan() {
        return $this->harga * $this->diskon / 100;
    }
    public function tampilkanNama() {

        echo "<h3>Data Produk</h3>";
        echo "Kode : " . $this->kode . "<br>";
        echo "Nama : " . $this->nama . "<br>";
        echo "Harga : Rp." . $this->harga . "<br>";
        echo "Stok : " . $this->stok . "<br>";
        echo "Nilai Stok : Rp." . $this->hitungNilaiStok() . "<br>";
        echo "Diskon : " . $this->diskon . "%<br>";
        echo "Potongan Harga : Rp." . $this->hitungPotongan() . "<br>";

    }
}
$produk1 = new Produk(
    "P001",
    "Buku",
    9000,
    100
);

$produk2 = new Produk(
    "P002",
    "Bolpoin",
    10000,
    20
);

$produk1->tampilkanNama();
echo "<hr>";
$produk2->tampilkanNama();

?>