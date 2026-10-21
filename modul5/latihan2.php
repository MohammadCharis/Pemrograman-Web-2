<?php

class Mahasiswa {

    private $nama;

    public function setNama($nama) {
        $this->nama = $nama;
    }

    public function getNama() {
        return $this->nama;
    }

}

$mhs1 = new Mahasiswa();

$mhs1->setNama("Andi");

echo "Nama: Moh Charis" . $mhs1->getNama();

?>