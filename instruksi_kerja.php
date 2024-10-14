<?php
//Definisi Kelas
class Mahasiswa
{
    //Atribut
    public $nama;
    public $nim;
    public $jurusan;

    //Constructor untuk menginisialisasi atribut
    public function __construct($nama, $nim, $jurusan)
    {
        $this->nama = $nama;
        $this->nim = $nim;
        $this->jurusan = $jurusan;
    }

    //Metode untuk Menampilkan Data Mahasiswa
    public function tampilData()
    {
        return "Halo perkenalkan, nama saya $this->nama dengan NIM $this->nim dari Jurusan $this->jurusan<br>";
    }

    //Metode untuk mengubah Jurusan
    public function updateJurusan($jurusanBaru)
    {
        $this->jurusan = $jurusanBaru;
    }

    //Metode untuk mengubah NIM menggunakan setter
    public function setNIM($nimBaru)
    {
        $this->nim = $nimBaru;
    }
}

//Membuat Objek Mahasiswa dan menampilkan data awal
$mahasiswa1 = new Mahasiswa("Galih Fitria Fijar Rofiqoh", "230302061", "Komputer dan Bisnis <br>");
echo $mahasiswa1->tampilData();

//Mengubah jurusan menggunakan metode updateJurusan
$mahasiswa1->updateJurusan("Teknik Informatika <br>");
echo "<b>Data setelah Jurusan diubah:</b><br>";
echo $mahasiswa1->tampilData();

//Mengubah NIM menggunakan setter
$mahasiswa1->setNIM("230302060");
echo "<b>Data setelah NIM diubah:</b><br>";
echo $mahasiswa1->tampilData();
