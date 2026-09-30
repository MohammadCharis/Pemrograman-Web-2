<?php
class Mahasiswa {
    public $nama;
    public $prodi;

    public function __construct() {
        $this->nama = "Charis";
        $this->prodi = "Teknik Informatika";
    }
    public function tampilkanNama() {
        echo "Nama : " . $this->nama . "<br>";
        echo "Prodi : " . $this->prodi;
    }
}
$mhs1=new Mahasiswa();
$mhs1->tampilkanNama();
?>
