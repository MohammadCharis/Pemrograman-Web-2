<?php

class Mahasiswa {

    private $nim;
    private $nama;
    private $prodi;
    private $semester;
    private $nilai = null;

    public function __construct($nim, $nama, $prodi, $semester) {
        $this->nim = $nim;
        $this->nama = $nama;
        $this->prodi = $prodi;
        $this->semester = $semester;
    }

    // Setter dengan validasi: nilai harus 0 - 100
    public function setNilai($nilai) {
        if ($nilai >= 0 && $nilai <= 100) {
            $this->nilai = $nilai;
        } else {
            echo "Nilai tidak valid.<br>";
        }
    }

    public function getNim() {
        return $this->nim;
    }

    public function getNama() {
        return $this->nama;
    }

    public function getProdi() {
        return $this->prodi;
    }

    public function getSemester() {
        return $this->semester;
    }

    public function getNilai() {
        return $this->nilai;
    }

    // Menentukan grade berdasarkan nilai
    public function tentukanGrade() {
        if ($this->nilai === null) {
            return "-";
        }

        if ($this->nilai >= 80) {
            return "A";
        } elseif ($this->nilai >= 70) {
            return "B";
        } elseif ($this->nilai >= 60) {
            return "C";
        } elseif ($this->nilai >= 50) {
            return "D";
        } else {
            return "E";
        }
    }

}

$mhs1 = new Mahasiswa(
    "2301001",
    "Andi",
    "Sistem Informasi",
    3
);

$mhs1->setNilai(50);

echo "NIM: " . $mhs1->getNim() . "<br>";
echo "Nama: " . $mhs1->getNama() . "<br>";
echo "Prodi: " . $mhs1->getProdi() . "<br>";
echo "Semester: " . $mhs1->getSemester() . "<br>";
echo "Nilai: " . $mhs1->getNilai() . "<br>";
echo "Grade: " . $mhs1->tentukanGrade() . "<br><br>";

// // Uji nilai di luar rentang
// $mhs2 = new Mahasiswa("2301002", "Budi", "Sistem Informasi", 3);
// $mhs2->setNilai(150);
// echo "Nilai Budi: " . ($mhs2->getNilai() ?? "belum ada") . "<br>";
// echo "Grade Budi: " . $mhs2->tentukanGrade();

?>