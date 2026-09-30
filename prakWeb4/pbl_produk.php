<?php
class Produk {
    public $kode, $nama, $harga, $stok, $diskon;

    public function __construct($kode, $nama, $harga, $stok, $diskon = 0) {
        $this->kode = $kode;
        $this->nama = $nama;
        $this->harga = $harga;
        $this->stok = $stok;
        $this->diskon = $diskon;
    }

    public function hitungNilaiStok() {
        return $this->harga * $this->stok;
    }

    public function hitungHargaDiskon() {
        return $this->harga - ($this->harga * $this->diskon / 100);
    }

    public function tampilkanNama() {
        echo "<h3>Data Produk</h3>";
        echo "Kode : " . $this->kode . "<br>";
        echo "Nama : " . $this->nama . "<br>";
        echo "Harga : Rp" . number_format($this->harga) . "<br>";
        echo "Stok : " . $this->stok . "<br>";
        echo "Nilai Stok : Rp" . number_format($this->hitungNilaiStok()) . "<br>";
        echo "Diskon : " . $this->diskon . "%<br>";
        echo "Harga Setelah Diskon : Rp" . number_format($this->hitungHargaDiskon()) . "<br>";
    }
}

$produk1 = new Produk("P001", "Buku", 9000, 100, 10);
$produk2 = new Produk("P002", "Bolpoin", 10000, 20, 5);
$produk3 = new Produk("P003", "Laptop", 7000000, 10, 15);

$produk1->tampilkanNama();
echo "<hr>";
$produk2->tampilkanNama();
echo "<hr>";
$produk3->tampilkanNama();
?>