<?php

class Pengguna {
    public $nama;
    public $email;

    public function tampilkanData() {
        echo "Nama: " . $this->nama . "<br>";
        echo "Email: " . $this->email . "<br>";
    }
}

class Mahasiswa extends Pengguna {
    public $nim;
    public $prodi;

}

$mhs1 = new Mahasiswa();
$mhs1->nama = "John Doe";   
$mhs1->email = "john.doe@gmail.com";
$mhs1->nim = "123456";
$mhs1->prodi = "Teknik Informatika";
$mhs1->tampilkanData();

echo "NIM: " . $mhs1->nim . "<br>";
echo "Program Studi: " . $mhs1->prodi . "<br>";
?>