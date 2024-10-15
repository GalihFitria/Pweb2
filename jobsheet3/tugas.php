<?php
class Person
{
    protected $nama;

    public function __construct($nama)
    {
        $this->nama = $nama;
    }

    public function getName()
    {
        return $this->nama;
    }

    // Metode untuk mendapatkan peran
    public function getRole()
    {
        return "Ini adalah orang.";
    }
}

class Dosen extends Person
{
    private $nidn;

    public function __construct($nama, $nidn)
    {
        parent::__construct($nama);
        $this->nidn = $nidn;
    }

    // Getter untuk NIDN
    public function getnidn()
    {
        return $this->nidn;
    }

    // Override getRole untuk Dosen
    public function getRole()
    {
        return "Dosen bernama " . $this->nama . " dengan NIDN " . $this->nidn;
    }
}

class Mahasiswa extends Person
{
    private $nim;

    public function __construct($nama, $nim)
    {
        parent::__construct($nama);
        $this->nim = $nim;
    }

    // Getter untuk NIM
    public function getnim()
    {
        return $this->nim;
    }

    // Override getRole untuk Mahasiswa
    public function getRole()
    {
        return "Mahasiswa bernama " . $this->nama . " dengan NIM " . $this->nim;
    }
}

// Instansiasi objek
$dosen = new Dosen("Galih Fitria", "234568996");
$mahasiswa = new Mahasiswa("Andin Ardelina", "230102059");

// Menampilkan informasi Dosen
echo "Nama: " . $dosen->getName();
echo "<br>";
echo "NIDN: " . $dosen->getnidn();
echo "<br>";
echo $dosen->getRole(); // Menampilkan peran Dosen
echo "<br><br>";

// Menampilkan informasi Mahasiswa
echo "Nama: " . $mahasiswa->getName();
echo "<br>";
echo "NIM: " . $mahasiswa->getnim();
echo "<br>";
echo $mahasiswa->getRole(); // Menampilkan peran Mahasiswa
echo "<br>";
echo "<hr>";

abstract class Jurnal
{
    abstract public function ajukanJurnal();
}

class JurnalDosen extends Jurnal
{
    public function ajukanJurnal()
    {
        return "Pengajuan Jurnal ini dilakukan oleh Dosen.";
    }
} // Menutup class JurnalDosen

class JurnalMahasiswa extends Jurnal
{
    public function ajukanJurnal()
    {
        return "Pengajuan Jurnal dilakukan oleh Mahasiswa.";
    }
} // Menutup class JurnalMahasiswa

$dosenJurnal = new JurnalDosen();
echo $dosenJurnal->ajukanJurnal();
echo "<br>";

$mahasiswaJurnal = new JurnalMahasiswa(); // Memperbaiki kesalahan penamaan variabel
echo $mahasiswaJurnal->ajukanJurnal(); // Memperbaiki kesalahan penamaan variabel
