<?php
class Mahasiswa {
    public $nama;
    public $prodi;

    public function __construct($nama, $prodi) {
        $this->nama = $nama;
        $this->prodi = $prodi;
    }
    public function tampilkanNama() {
        echo "Nama : " . $this->nama . "<br>";
        echo "Prodi : " . $this->prodi . "<br>";
    }
}
$mhs1=new Mahasiswa(
    "Charis", "Teknik Informatika"
);
$mhs2=new Mahasiswa(
    "Dewi", "Sistem Informasi"
);
$mhs1->tampilkanNama();
echo "<hr>";
$mhs2->tampilkanNama();
?>