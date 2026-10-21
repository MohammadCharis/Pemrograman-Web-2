# Laporan Praktikum

Nama : ...............................
NIM  : ...............................

**Judul:** Pengenalan Pemrograman Berorientasi Objek

---

## 1. Tujuan Praktikum

1. Memahami perbedaan antara pemrograman prosedural dan Pemrograman Berorientasi Objek (PBO).
2. Mampu membuat class beserta property dan method.
3. Mampu membuat object dari sebuah class serta mengisi property dan memanggil method-nya.
4. Mampu menerapkan konsep PBO pada studi kasus sederhana (Sistem Data Buku, Sistem Mahasiswa, dan Sistem Rental Kendaraan).

## 2. Hasil Praktikum

**Praktikum 1 (Prosedural)** — `prosedural.php`
Menampilkan data mahasiswa menggunakan pendekatan prosedural. Data disimpan dalam variabel `$nim`, `$nama`, `$prodi`, `$semester`, sedangkan proses tampil dibuat dalam fungsi `tampilkanData()`.

```
NIM : 23001
Nama : Andi
Prodi : Sistem Informasi
Semester : 4
```

**Praktikum 2–6 (Class dan Object)** — `oop.php`
Membuat class `Mahasiswa` dengan property `nim`, `nama`, `prodi`, `semester` dan method `tampilkanData()`. Kemudian membuat dua object `$mhs1` (Andi) dan `$mhs2` (Budi) dari class yang sama, namun isi property-nya berbeda.

```
NIM : 23001
Nama : Andi
Prodi : Sistem Informasi
Semester : 4
NIM : 23002
Nama : Budi
Prodi : Sistem Informasi
Semester : 2
```

**Praktikum 8 (Case Based Learning: Sistem Data Buku)** — `praktikum8/buku.php`
Membuat class `Buku` dengan property `kode`, `judul`, `penulis`, `tahun` dan method `tampilkanData()`.

**Praktikum 9 (Sistem Mahasiswa)** — `praktikum9/mahasiswa.php`
Membuat class `Mahasiswa` dengan property `nim`, `nama`, `prodi`, `nilai` dan method `tampilkanData()` serta `tentukanGrade()`. Grade ditentukan dengan kondisi: nilai >= 80 = A, >= 70 = B, >= 60 = C, >= 50 = D, < 50 = E.

```
NIM : 23001
Nama : Andi
Prodi : Sistem Informasi
Nilai : 85
Grade : A
```

**Tugas Praktikum (Sistem Rental Kendaraan)** — `praktikum2/tugas.php`
Membuat dua class: `Kendaraan` (property `nomor`, `merk`, `jenis`, `status`; method `tampilkanData()`, `statusKendaraan()`) dan `Pelanggan` (property `id`, `nama`, `alamat`; method `tampilkanData()`, `sewaKendaraan()`). Membuat minimal dua object untuk masing-masing class.

## 3. Perbandingan Prosedural dan PBO

**Pemrograman Prosedural**
- Data dan fungsi/prosedur disimpan secara terpisah.
- Fungsi dipanggil dengan mengirimkan data sebagai parameter.
- Jika data banyak (misal 100 mahasiswa), pengelolaannya menjadi sulit karena variabel dan fungsi tersebar.

**PBO (Pemrograman Berorientasi Objek)**
- Data (property) dan perilaku (method) disatukan di dalam class.
- Object dibuat dari class, masing-masing dapat menyimpan data sendiri.
- Method menggunakan `$this` untuk mengakses data milik object yang sedang aktif.
- Lebih mudah dikelola untuk jumlah data yang banyak karena setiap object mengelola datanya sendiri.

Contoh kode:

**Prosedural:**
```php
$nama = "Andi";

function tampilkanNama($nama)
{
    echo $nama;
}

tampilkanNama($nama);
```

**PBO:**
```php
class Mahasiswa
{
    public $nama;

    public function tampilkanNama()
    {
        echo $this->nama;
    }
}

$mhs = new Mahasiswa();
$mhs->nama = "Andi";
$mhs->tampilkanNama();
```

Perbedaan utama: pada versi prosedural data dikirim sebagai parameter fungsi, sedangkan pada PBO data disimpan dalam object dan diakses melalui `$this`.

## 4. Analisis Class dan Object

- **Class** adalah cetakan/blueprint yang mendefinisikan property (karakteristik) dan method (perilaku). Contoh: class `Mahasiswa` dengan property `nim`, `nama`, `prodi`, `nilai` dan method `tampilkanData()`, `tentukanGrade()`.
- **Object** adalah hasil instansiasi dari class. Contoh: `$mhs1 = new Mahasiswa();`. Object `$mhs1` menyimpan data Andi sedangkan `$mhs2` menyimpan data Budi — keduanya dibuat dari class `Mahasiswa` yang sama tetapi datanya berbeda.
- Kata kunci `$this` menunjuk pada object yang sedang menggunakan method tersebut, sehingga `$mhs1->tampilkanData()` menampilkan data milik `$mhs1`.
- Pada studi kasus rental kendaraan: class `Kendaraan` dan `Pelanggan` adalah class, sedangkan `$kendaraan1`, `$kendaraan2`, `$pelanggan1`, `$pelanggan2` adalah object-nya.

## 5. Kesimpulan

PBO (Pemrograman Berorientasi Objek) menggabungkan data dan perilaku dalam satu class, sehingga program lebih terstruktur dan mudah dikembangkan. Dibandingkan cara prosedural, PBO lebih mudah mengelola data dalam jumlah banyak karena setiap object menyimpan datanya sendiri. Konsep class dan object sangat berguna untuk membangun sistem yang kompleks, seperti sistem rental kendaraan dalam tugas praktikum ini.