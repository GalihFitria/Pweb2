<?php
// class mahasiswa mengambil sifat dari class pengguna
class Mahasiswa extends Pengguna
{
    // Atribut atau Properties
    private $nim;
    private $jurusan;

    // Constructor
    public function __construct($nama, $nim, $jurusan)
    {
        parent::__construct($nama);
        $this->nim = $nim;
        $this->jurusan = $jurusan;
    }

    // Override metode aksesFitur
    public function aksesFitur()
    {
        return "Dapat melihat nilai";
    }

    // Metode atau Function
    public function tampilkanData()
    {
        return "Nama: $this->nama, NIM: $this->nim, Jurusan: $this->jurusan ";
    }

    // Metode getter dan setter atribut Nama
    public function getNama()
    {
        return $this->nama;
    }
    public function setNama($nama)
    {
        $this->nama = $nama;
    }

    // Metode getter dan setter atribut NIM
    public function getNim()
    {
        return $this->nim;
    }
    public function setNim($nim)
    {
        $this->nim = $nim;
    }

    // Metode getter dan setter atribut Jurusan
    public function getJurusan()
    {
        return $this->jurusan;
    }
    public function setJurusan($jurusan)
    {
        $this->jurusan = $jurusan;
    }
}

// Instansiasi Objek
$mahasiswa1 = new Mahasiswa("Galih Fitria Fijar Rofiqoh", "230302060", "Komputer dan Bisnis <br>");
echo "<b>Data Awal </b><br>";
echo $mahasiswa1->tampilkanData() . "<br>";

// Menggunakan getter untuk mengakses atribut
// echo "<b>Data telah di Encapsulasi: </b><br>";
echo "Nama: " . $mahasiswa1->getNama() . "<br>";
echo "NIM: " . $mahasiswa1->getNim() . "<br>";
echo "Jurusan: " . $mahasiswa1->getJurusan() . "<br>";

// Menggunakan setter untuk mengubah nilai atribut
$mahasiswa1->setNama("Fijar Nur Azizah");
$mahasiswa1->setNim("230302061");
$mahasiswa1->setJurusan("Teknik Informatika <br>");


// Menampilkan data setelah diubah
echo "<b>Data setelah diubah </b><br>";
echo $mahasiswa1->tampilkanData();

//Definisi Class
abstract class Pengguna
{
    // Atribut atau Properties
    protected $nama;

    public function __construct($nama)
    {
        $this->nama = $nama;
    }

    // Metode aksesFitur (akan dioverride di child class)
    abstract public function aksesFitur();

    //Getter untuk Nama
    public function getNama()
    {
        return $this->nama;
    }
}

class Dosen extends Pengguna
{
    private $mataKuliah;

    public function __construct($nama, $mataKuliah)
    {
        parent::__construct($nama);
        $this->mataKuliah = $mataKuliah;
    }

    // Override metode aksesFitur
    public function aksesFitur()
    {
        return "Dapat mengelola Mata Kuliah dan Penilaian";
    }

    //Getter untuk MataKuliah
    public function getmataKuliah()
    {
        return $this->mataKuliah;
    }
    //Method untuk menampilkan Data Dosen
    public function tampilkanDosen()
    {
        return "Nama Dosen: $this->nama, Mata Kuliah: $this->mataKuliah<br>";
    }
}
// Instansiasi Objek
$dosen1 = new Dosen("Fijar", "Basis Data");

// Menampilkan Data Dosen
echo "<br><b>Data Dosen </b><br>";
echo $dosen1->tampilkanDosen();

// Menampilkan Data Mahasiswa dan Dosen
echo "<br><b>Data Mahasiswa </b><br>";
echo $mahasiswa1->tampilkanData();
echo $mahasiswa1->aksesFitur() . "<br>";

echo "<br><b>Data Dosen </b><br>";
echo $dosen1->tampilkanDosen();
echo $dosen1->aksesFitur() . "<br>";
