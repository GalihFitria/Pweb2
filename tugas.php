<?php
//Definisi Kelas
class Dosen
{
    //Atribut atau Properties
    public $nama;
    public $nip;
    public $mataKuliah;

    //Constructor untuk menginisialisasi atribut
    public function __construct($nama, $nip, $mataKuliah)
    {
        $this->nama = $nama;
        $this->nip = $nip;
        $this->mataKuliah = $mataKuliah;
    }

    //Metode untuk menampilkan Data Dosen
    public function tampilkanDosen()
    {
        return "Dosen bernama $this->nama dengan NIP $this->nip mengampu Mata Kuliah $this->mataKuliah.<br>";
    }
}

//Instansiasi Objek
$dosen1 = new Dosen("Galih Fitria Fijar Rofiqoh", "2303020619748249", "Desain Interaktif Pengguna");
echo $dosen1->tampilkanDosen();
