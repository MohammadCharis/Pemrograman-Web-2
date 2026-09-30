<?php   
class Mahasiswa {

    public function __construct() {
        echo "Object Mahasiswa berhasil dibuat";
    }

}

$mhs = new Mahasiswa();
?>

<?php
class mahasiswa {
    public $nama;

    public function tampilkanNama() {
        echo $this->nama;
    }
}

$mhs = new mahasiswa();
$mhs->nama = "John Doe";
$mhs->tampilkanNama();
?>