<?php

class pengguna {
    public $nama;
    public $email;

    public function __construct($nama, $email) {
        $this->nama = $nama;
        $this->email = $email;
    }

    public function tampilkanData() {
        echo "Nama: " . $this->nama . "<br>";
        echo "Email: " . $this->email . "<br>";
    }

    public function __destruct() {
        echo "Objek pengguna telah dihancurkan.";
    }   

}

class Mahasiswa extends pengguna {
    public $nim;
    public $prodi;

    public function __construct($nama, $email, $nim, $prodi) {
        parent::__construct($nama, $email);
        $this->nim = $nim;
        $this->prodi = $prodi;
    }

    public function tampilkanDataMahasiswa() {
        parent::tampilkanData();
        echo "NIM: " . $this->nim . "<br>";
        echo "Program Studi: " . $this->prodi . "<br>";
    }

    public function tampilkanPeran() {
        echo "Peran: Mahasiswa <br>";
    }
}

class Dosen extends pengguna {
    public $nidn;
    public $bidangKeahlian;

    public function __construct($nama, $email, $nidn, $bidangKeahlian) {
        parent::__construct($nama, $email);
        $this->nidn = $nidn;
        $this->bidangKeahlian = $bidangKeahlian;
    }

    public function tampilkanDataDosen() {
        parent::tampilkanData();
        echo "NIDN: " . $this->nidn . "<br>";
        echo "Bidang Keahlian: " . $this->bidangKeahlian . "<br>";
    }

    public function tampilkanPeran() {
        echo "Peran: Dosen <br>";
    }
}

class Administrasi extends pengguna {
    public $idPegawai;
    public $bagian;

    public function __construct($nama, $email, $idPegawai, $bagian) {
        parent::__construct($nama, $email);
        $this->idPegawai = $idPegawai;
        $this->bagian = $bagian;
    }

    public function tampilkanData() {
        parent::tampilkanData();
        echo "ID Pegawai: " . $this->idPegawai . "<br>";
        echo "Bagian: " . $this->bagian . "<br>";
    }

    public function tampilkanPeran() {
        echo "Peran: Tenaga Administrasi <br>";
    }
}

$mhs1 = new Mahasiswa("Andi", "Andi@gmail.com", "123456", "Teknik Informatika");
$dosen1 = new Dosen("Budi", "budi@gmail.com", "789012", "Machine Learning");
$administrasi1 = new Administrasi("Citra", "citra@gmail.com", "ADM001", "Akademik");

echo "Data Mahasiswa: <br>";
$mhs1->tampilkanDataMahasiswa();
$mhs1->tampilkanPeran();
echo "<br>";    

echo "Data Dosen: <br>";
$dosen1->tampilkanDataDosen();
$dosen1->tampilkanPeran();

echo "<br>Data Administrasi: <br>";
$administrasi1->tampilkanData();
$administrasi1->tampilkanPeran();

?>