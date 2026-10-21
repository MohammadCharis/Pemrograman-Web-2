<?php
class mahasiswa {
    public $nim;
    public $nama;
    public $prodi;
    public $semester;

    public function __construct(
        $nim,
        $nama,
        $prodi,
        $semester
    ) {

        $this->nim = $nim;
        $this->nama = $nama;
        $this->prodi = $prodi;
        $this->semester = $semester;
    }
    public function tampilkanNama() {
        echo "NIM : " . $this->nim . "<br>";
        echo "Nama : " . $this->nama . "<br>";
        echo "Prodi : " . $this->prodi . "<br>";
        echo "Semester : " . $this->semester . "<br>";
    }
}
$mhs1 = new Mahasiswa (
    "123456",
    "Charis",
    "Sistem Inforamsi",
    3
);

$mhs1->tampilkanNama();

?>