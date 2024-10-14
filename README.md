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
<h3>1. Encapsulasi</h3>
Menyembunyikan detail implementasi dan hanya memberikan akses melalui metode tertentu.
<h3>2. Inheritance</h3>
Kelas dapat mewarisi properti dan metode dari kelas lain.
<h3>3. Polymorphism</h3>
Metode yang sama dapat memiliki implementasi berbeda dalam class yang berbeda.
<h3>4. Abstraction</h3>
Menyembunyikan detail implementasi dan hanya menampilkan fungsi penting.


# Jobsheet 1 : Menggunakan Konsep Kelas dan Objek dalam PHP
<h3>A. Instruksi Kerja</h3>
<h4><i>Class Mahasiswa</i></h4>

- <i><h3>Atribut </h3></i>
1. nama : Nama Mahasiswa
2. nim : Nomor Induk Mahasiswa
3. jurusan : Jurusan Mahasiswa <br>
   Modifier akses **public** memungkinkan atribut atau metode dapat diakses dari mana saja.<br> Atribut sendiri berfungsi untuk menyimpan data atau status dari suatu objek.
```php
<?php
    public $nama;
    public $nim;
    public $jurusan;
?>
```
- <i><h3>Method </h3></i>
1. Method Construct, digunakan untuk menginisialisasi atribut yang berisikan nama, nim dan jurusan untuk untuk mengatur nilai awal pada saat dibuat yang ada pada Class Mahasiswa
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
2. Methode tampilData(), digunakan untuk menampilkan Data Mahasiwa
  ```php
<?php
    // Metode untuk Menampilkan Data Mahasiswa
    public function tampilData()
    {
        return "Halo perkenalkan, nama saya $this->nama dengan NIM $this->nim dari Jurusan $this->jurusan<br>";
    }
?>
```
3. Method updateJurusan, digunakan untuk memungkinkan perubahan pada atribut Jurusan
  ```php
<?php
// Metode untuk mengubah Jurusan
    public function updateJurusan($jurusanBaru)
    {
        $this->jurusan = $jurusanBaru;
    }
?>
```
4. Method setNIM, digunakan untuk mengubah nilai atribut Nim
```php
<?php
    //Metode untuk mengubah NIM menggunakan setter
    public function setNIM($nimBaru)
    {
        $this->nim = $nimBaru;
    }
?>
```
- <i><h3>Instansiasi Objek Class Mahasiswa </h3></i>
```php
<?php
// Membuat atau Instansiasi Objek Mahasiswa dan menampilkan data awal
$mahasiswa1 = new Mahasiswa("Galih Fitria Fijar Rofiqoh", "230302061", "Komputer dan Bisnis <br>");
echo $mahasiswa1->tampilData();
?>
```
<h3>Output Class Mahasiswa: </h3>
<img src='https://github.com/user-attachments/assets/895686ec-244e-4d92-9390-172d361c7ec2'>

<h3>B. Tugas</h3>
<h4><i>Class Dosen</i></h4>

- <i><h3>Atribut </h3></i>
1. nama : Nama Dosen
2. nip : Nomor Induk Pegawai
3. mataKuliah : Mata Kuliah yang diampu
```php
<?php
    //Atribut atau Properties
    public $nama;
    public $nip;
    public $mataKuliah;
?>
```
- <i><h3>Method </h3></i>
1. Method Construct, digunakan untuk menginisialisasi atribut yang berisikan nama, nip dan mataKuliah untuk untuk mengatur nilai awal pada saat dibuat yang ada pada Class Dosen.
```php
    //Constructor untuk menginisialisasi atribut
    public function __construct($nama, $nip, $mataKuliah)
    {
        $this->nama = $nama;
        $this->nip = $nip;
        $this->mataKuliah = $mataKuliah;
    }
?>
```
2. Methode tampilkanDosen(), digunakan untuk Informasi Dosen
```php
    //Metode untuk menampilkan Data Dosen
    public function tampilkanDosen()
    {
        return "Dosen bernama $this->nama dengan NIP $this->nip mengampu Mata Kuliah $this->mataKuliah.<br>";
    }
?>
```
- <i><h3>Instansiasi Objek Class Dosen </h3></i>
```php
<?php
//Instansiasi Objek
$dosen1 = new Dosen("Galih Fitria Fijar Rofiqoh", "2303020619748249", "Desain Interaktif Pengguna");
echo $dosen1->tampilkanDosen();
?>
```
<h3>Ouput Class Dosen: </h3>
<img src='https://github.com/user-attachments/assets/3541d6c6-765b-46a9-a329-947df338b0cd'>

# Jobsheet 2 : Implementasi Prinsip OOP dalam PHP



