# Pengenalan OOP dalam PHP
<h2><i>OOP (Object Oriented Programming)</i></h2> 
Object-Oriented Programming (OOP) adalah paradigma pemrograman yang berfokus pada konsep objek. Dalam OOP, konsep dasar seperti class dan object
digunakan untuk memodelkan masalah dunia nyata ke dalam kode program. Prinsip-prinsip dasar OOP termasuk Encapsulation, Inheritance, Polymorphism, dan
Abstraction yang memungkinkan kode lebih modular, terstruktur, dan mudah dipelihara.

<h2><i>Kelas (Class)</i></h2>

- Struktur atau blueprint yang mendefinisikan atribut dan metode yang dimiliki
oleh objek.
- Atribut atau properties adalah variabel yang menyimpan data untuk objek.
- Metode adalah fungsi yang ditentukan dalam kelas yang dapat dipanggil oleh
objek.

<h2><i>Objek (Object)</i></h2>

- Instansiasi dari kelas.
- Memiliki akses ke atribut dan metode yang didefinisikan dalam kelas.

<h2><i>Atribut dan Metode</i></h2>

- Atribut: Menyimpan data atau keadaan dari objek.
- Metode: Operasi atau fungsi yang dilakukan oleh objek.
-  Aksesibilitas
  1. Public: Dapat diakses dari mana saja.
  2. Private: Hanya dapat diakses dalam kelas itu sendiri.
  3. Protected: Dapat diakses oleh kelas itu sendiri dan kelas turunan.
     
<h2><i>Prinsip dalam OOP</i></h2>

- <b>Encapsulasi: </b>
Menyembunyikan detail implementasi dan hanya memberikan akses melalui metode tertentu.
- <b>Inheritance: </b>
Kelas dapat mewarisi properti dan metode dari kelas lain.
- <b>Polymorphism: </b> 
Metode yang sama dapat memiliki implementasi berbeda dalam class yang berbeda.
- <b>Abstraction: </b>
Menyembunyikan detail implementasi dan hanya menampilkan fungsi penting.

# PERTEMUAN 1-2
# JOBSHEET 1 : Menggunakan Konsep Kelas dan Objek dalam PHP
<h2>Class Mahasiswa - Instruksi kerja</h2>
<h3>a) Buat class Mahasiswa yang memiliki atribut nama, nim, dan jurusan</h3>

- <i><h4>Class dan Atribut </h4></i>
```php
<?php
//Definisi Kelas
class Mahasiswa
{
    //Atribut
    public $nama;
    public $nim;
    public $jurusan;
?>
```
   Modifier akses **public** memungkinkan atribut atau metode dapat diakses dari mana saja. Atribut sendiri berfungsi untuk menyimpan data atau status dari suatu objek.

<h3>b) Buat metode tampilkanData() dalam class Mahasiswa</h3>
Methode tampilData(), digunakan untuk menampilkan Data Mahasiwa

  ```php
<?php
    // Metode untuk Menampilkan Data Mahasiswa
    public function tampilData()
    {
        return "Halo perkenalkan, nama saya $this->nama dengan NIM $this->nim dari Jurusan $this->jurusan<br>";
    }
?>
```
<h3>c) Tambahkan constructor pada kelas Mahasiswa yang akan menginisialisasi
atribut nama, nim, dan jurusan</h3>
Method Construct, digunakan untuk menginisialisasi atribut yang berisikan nama, nim dan jurusan untuk untuk mengatur nilai awal pada saat dibuat yang ada pada Class Mahasiswa.

  ```php
<?php
    // Constructor untuk menginisialisasi atribut
    public function __construct($nama, $nim, $jurusan)
    {
        $this->nama = $nama;
        $this->nim = $nim;
        $this->jurusan = $jurusan;
    }
?>
```
<h3>d) Buat metode updateJurusan() dalam kelas Mahasiswa yang memungkinkan
perubahan jurusan</h3>
Method updateJurusan, digunakan untuk memungkinkan perubahan pada atribut Jurusan

  ```php
<?php
// Metode untuk mengubah Jurusan
    public function updateJurusan($jurusanBaru)
    {
        $this->jurusan = $jurusanBaru;
    }
?>
```
<h3>e) Ubah nilai atribut nim dari objek Mahasiswa menggunakan metode setter</h3>
Method setNIM, digunakan untuk mengubah nilai atribut Nim

```php
<?php
    //Metode untuk mengubah NIM menggunakan setter
    public function setNIM($nimBaru)
    {
        $this->nim = $nimBaru;
    }
?>
```
<h3>f) Instansiasi objek mahasiswa</h3>

```php
<?php
// Membuat atau Instansiasi Objek Mahasiswa dan menampilkan data awal
$mahasiswa1 = new Mahasiswa("Galih Fitria Fijar Rofiqoh", "230302061", "Komputer dan Bisnis <br>");
echo $mahasiswa1->tampilData();
?>
```
<h3>Script (instruksi_kerja.php): </h3>

```php
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
?>
```
<h3>Output Class Mahasiswa: </h3>
<img src='https://github.com/user-attachments/assets/895686ec-244e-4d92-9390-172d361c7ec2'>

<h2>Class Dosen - Tugas</h2>
<h3>a) Implementasikan kelas Dosen dengan atribut nama, nip, dan mataKuliah</h3>

- <i><h4>Class dan Atribut </h4></i>

```php
<?php
    //Atribut atau Properties
    public $nama;
    public $nip;
    public $mataKuliah;
?>
```
<h3>b) Menambahkan constructor pada kelas Dosen yang akan menginisialisasi
atribut nama, nip, dan mataKuliah</h3>
Method Construct, digunakan untuk menginisialisasi atribut yang berisikan nama, nip dan mataKuliah untuk untuk mengatur nilai awal pada saat dibuat yang ada pada Class Dosen

```php
<?php
    //Constructor untuk menginisialisasi atribut
    public function __construct($nama, $nip, $mataKuliah)
    {
        $this->nama = $nama;
        $this->nip = $nip;
        $this->mataKuliah = $mataKuliah;
    }
?>
```

<h3>c) Buat metode tampilkanDosen() untuk menampilkan informasi dosen</h3>
Methode tampilkanDosen(), digunakan untuk Informasi Dosen

```php
<?php
    //Metode untuk menampilkan Data Dosen
    public function tampilkanDosen()
    {
        return "Dosen bernama $this->nama dengan NIP $this->nip mengampu Mata Kuliah $this->mataKuliah.<br>";
    }
?>
```
<h3>d) Buat objek dari kelas Dosen, dan gunakan metode tampilkanDosen() untuk
menampilkan informasi tersebut</h3>

```php
<?php
$dosen1 = new Dosen("Galih Fitria Fijar Rofiqoh", "2303020619748249", "Desain Interaktif Pengguna");
echo $dosen1->tampilkanDosen();
?>
```
<h3>Script (tugas.php): </h3>

```php
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
?>
```

<h3>Ouput Class Dosen: </h3>
<img src='https://github.com/user-attachments/assets/3541d6c6-765b-46a9-a329-947df338b0cd'>

# PERTEMUAN 3-4
# JOBSHEET 2 : Implementasi Prinsip OOP dalam PHP
<h2>1. Membuat Class dan Object</h2>
<h3>a) Buat class Mahasiswa yang memiliki atribut nama, nim, dan jurusan</h3>

```php
<?php
<?php
//Definisi Kelas
class Mahasiswa
{
    //Atribut
    public $nama;
    public $nim;
    public $jurusan;
  ?>
  ```
  <h3>b) Buat metode tampilkanData() dalam class Mahasiswa</h3>
  Methode tampilData(), digunakan untuk menampilkan Data Mahasiwa
  
  ```php
  <?php
      public function tampilkanData()
    {
        return "Nama: $this->nama, NIM: $this->nim, Jurusan: $this->jurusan ";
    }
  ?>
  ```
  <h3>c) Instansiasi objek dari class Mahasiswa dan tampilkan data mahasiswa tersebut</h3>
  
  ```php
  <?php
  // Instansiasi Objek
$mahasiswa1 = new Mahasiswa("Galih Fitria Fijar Rofiqoh", "230302060", "Komputer dan Bisnis <br>");
echo "<b>Data Awal </b><br>";
echo $mahasiswa1->tampilkanData() . "<br>";
  ?>
  ```
<h2>2. Encapsulation</h2>
<h3>a) Ubah atribut dalam class Mahasiswa menjadi private</h3>

```php
<?php
//Definisi Kelas
class Mahasiswa
{
    //Atribut
    private $nama;
    private $nim;
    private $jurusan;
?>
```

<h3>b) Buat metode getter dan setter untuk atribut nama, nim, dan jurusan</h3>

```php
<?php
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
?>
```
<h3>c) Demonstrasikan akses ke atribut menggunakan metode getter dan setter</h3>

```php
<?php
// Menggunakan getter untuk mengakses atribut
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
?>
```
<h2>3. Inheritance</h2>
<h3>a) Buat class Pengguna dengan atribut nama dan metode getNama()</h3>

```php
<?php
//Definisi Class
class Pengguna
{
    protected $nama;

    public function __construct($nama)
    {
        $this->nama = $nama;
    }
    public function getNama()
    {
        return $this->nama;
    }
?>
```
<h3>b) Buat class Dosen yang mewarisi class Pengguna dan tambahkan atribut
mataKuliah</h3>

```php
<?php
class Dosen extends Pengguna
{
    private $mataKuliah;

    public function __construct($nama, $mataKuliah)
    {
        parent::__construct($nama);
        $this->mataKuliah = $mataKuliah;
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
?>
```
<h3>c) Instansiasi objek dari class Dosen dan tampilkan data dosen</h3>

```php
<?php
// Instansiasi Objek
$dosen1 = new Dosen("Fijar", "Basis Data");

// Menampilkan Data Dosen
echo "<br><b>Data Dosen </b><br>";
echo $dosen1->tampilkanDosen();
?>
```
<h2>4. Polymorphism</h2>
<h3>a) Buat class Pengguna dengan metode aksesFitur()</h3>

```php
<?php

?>
```
<h3>b) Implementasikan aksesFitur() dengan cara berbeda di class Dosen dan
Mahasiswa</h3>
<i>aksesFitur() pada Dosen</i>

```php
<?php
public function aksesFitur()
    {
        return "Dapat mengelola Mata Kuliah dan Penilaian";
    }
?>
```
<i>aksesFitur() pada Mahasiswa</i>

```php
<?php
public function aksesFitur()
    {
        return "Dapat melihat nilai";
    }
?>
```

<h3>c) Instansiasi objek dari class Dosen dan Mahasiswa, lalu panggil metode
aksesFitur()</h3>

```php
<?php
// Menampilkan Data Mahasiswa dan Dosen
echo "<br><b>Data Mahasiswa </b><br>";
echo $mahasiswa1->tampilkanData();
echo $mahasiswa1->aksesFitur() . "<br>";

echo "<br><b>Data Dosen </b><br>";
echo $dosen1->tampilkanDosen();
echo $dosen1->aksesFitur() . "<br>";

?>
```
<h2>5. Abstraction</h2>
<h3>a) Buat class abstrak Pengguna dengan metode abstrak aksesFitur()</h3>

```php
<?php
//Definisi Class
abstract class Pengguna
{
    protected $nama;

    public function __construct($nama)
    {
        $this->nama = $nama;
    }
    abstract public function aksesFitur();
?>
```
<h3>b) Implementasikan class Mahasiswa dan Dosen yang mengimplementasikan
metode abstrak tersebut</h3>

```php
<?php
?>
```
<h3>c) Demonstrasikan dengan memanggil metode aksesFitur() dari objek yang
diinstansiasi</h3>

```php
<?php
?>
```



