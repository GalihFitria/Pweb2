# PRAKTIKUM WEB 2

# PERTEMUAN 1-2
# JOBSHEET 1 : Menggunakan Konsep Kelas dan Objek dalam PHP
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
Object-Oriented Programming (OOP) adalah paradigma pemrograman yang
berfokus pada konsep objek. Dalam OOP, konsep dasar seperti class dan object
digunakan untuk memodelkan masalah dunia nyata ke dalam kode program. Prinsip-
prinsip dasar OOP termasuk Encapsulation, Inheritance, Polymorphism, dan
Abstraction yang memungkinkan kode lebih modular, terstruktur, dan mudah
dipelihara.

<h2><i>Prinsip OOP dalam PHP</i></h2>

- Encapsulation: Menyembunyikan detail implementasi dan hanya memberikan akses melalui metode tertentu.

- Inheritance: Kelas dapat mewarisi properti dan metode dari kelas lain.
  
- Polymorphism: Metode yang sama dapat memiliki implementasi berbeda dalam class yang berbeda.
  
- Abstraction: Menyembunyikan detail implementasi dan hanya menampilkan fungsi penting.

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
public function aksesFitur()
return "Dapat mengelola Mata Kuliah dan Penilaian";
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

Menghapus isi abstract function aksesFitur()
```php
<?php
 abstract public function aksesFitur();
?>
```

Override metode aksesFitur() di class Dosen

```php
<?php
public function aksesFitur()
    {
        return "Dapat mengelola Mata Kuliah dan Penilaian";
    }
?>
```
Override metode aksesFitur() di class Mahasiswa

```php
<?php
 public function aksesFitur()
    {
        return "Dapat melihat nilai";
    }
?>
```

<h3>c) Demonstrasikan dengan memanggil metode aksesFitur() dari objek yang
diinstansiasi</h3>

```php
<?php
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
?>
```

<h3>Script (instruksi.php): </h3>

```php
<?php
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

?>
```

<h3>Ouput: </h3>

# PERTEMUAN 5-6
# JOBSHEET 3 : Menerapkan Konsep Inheritance, Polymorphism, Encapsulation, dan Abstraction dalam PHP
Object-Oriented Programming (OOP) dalam PHP memungkinkan pengembangan
perangkat lunak yang lebih terstruktur dan modular. Konsep-konsep seperti Inheritance,
Polymorphism, Encapsulation, dan Abstraction adalah pilar penting yang membuat
OOP efisien. Dengan menguasai konsep-konsep ini, pengembang dapat membuat kode
yang lebih fleksibel, dapat digunakan kembali, dan mudah dipelihara.

<h2><i>Instruksi kerja</i></h2>
<h2>1. Inheritance (Pewarisan)</h2>
Inheritance adalah konsep di mana sebuah kelas dapat mewarisi atribut dan
metode dari kelas lain. Ini memungkinkan penggunaan kembali kode dan
menciptakan hubungan hierarkis antara kelas.

<h3>a) Buat kelas Person dengan atribut name dan metode getName() </h3>

```php
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
}
?>
```

<h3>b) Buat kelas Student yang mewarisi dari Person dan tambahkan atribut studentID
serta metode getStudentID()</h3>

```php
<?php
class Student extends Person
{
    private $studentID;

    public function __construct($nama, $studentID)
    {
        parent::__construct($nama);
        $this->studentID = $studentID;
    }

    //Getter untuk MataKuliah
    public function getstudentID()
    {
        return $this->studentID;
    }
}
?>
```

<h3>c) Intansiasi Objek</h3>

```php
<?php
$student = new Student("Galih Fitria", "S123");

echo "Nama: " . $student->getName();
echo "<br>";
echo "Student ID: " . $student->getStudentID();
?>
```

<h3>Script (inheritance.php): </h3>

```php
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
}

class Student extends Person
{
    private $studentID;

    public function __construct($nama, $studentID)
    {
        parent::__construct($nama);
        $this->studentID = $studentID;
    }

    //Getter untuk MataKuliah
    public function getstudentID()
    {
        return $this->studentID;
    }
}
$student = new Student("Galih Fitria", "S123");

echo "Nama: " . $student->getName();
echo "<br>";
echo "Student ID: " . $student->getStudentID();
?>
```
<h3>Ouput Inheritance: </h3>
<img src='https://github.com/user-attachments/assets/206548e4-2578-4564-aa7f-3bdee6115516'>

<h2>2. Polymorphism</h2>
Polymorphism memungkinkan satu metode untuk memiliki banyak bentuk,
biasanya melalui metode overriding di kelas turunan. Dengan ini, objek dapat
diperlakukan sebagai bentuk umum dan khusus sesuai kebutuhan.

<h3>a) Buat kelas Teacher yang juga mewarisi dari Person dan tambahkan atribut
teacherID</h3>

```php
class Teacher extends Person
{
    public $teacherID;

    public function __construct($nama, $teacherID)
    {
        parent::__construct($nama);
        $this->teacherID = $teacherID;
    }
?>
```

<h3>b) Override metode getName() di kelas Student dan Teacher untuk menampilkan
format berbeda</h3>
Override metode getName() di kelas Student

```php
<?php
    // Override getName untuk format berbeda
    public function getName()
    {
        return "Nama Siswa: " . $this->nama;
    }
?>
```

Override metode getName() di kelas Teacher

```php
    // Override getName untuk format berbeda
    public function getName()
    {
        return "<br> Nama Guru: " . $this->nama;
    }
?>
```
<h3>c) Instansiasi Objek</h3>

```php
<?php
$student = new Student("Galih Fitria Fijar", "230302060");
$teacher = new Teacher("Andin Ardelina", "Matematika Distrik");

echo $student->getName(); 
echo $teacher->getName(); 
?>
```

<h3>Script (polymorphism.php): </h3>

```php
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
}

class Student extends Person
{
    public $studentID;

    public function __construct($nama, $studentID)
    {
        parent::__construct($nama);
        $this->studentID = $studentID;
    }

    // Override getName untuk format berbeda
    public function getName()
    {
        return "Nama Siswa: " . $this->nama;
    }

    //Getter untuk studentID
    public function getstudentID()
    {
        return $this->studentID;
    }
}

class Teacher extends Person
{
    public $teacherID;

    public function __construct($nama, $teacherID)
    {
        parent::__construct($nama);
        $this->teacherID = $teacherID;
    }
    // Override getName untuk format berbeda
    public function getName()
    {
        return "<br> Nama Guru: " . $this->nama;
    }

}
// Contoh penggunaan
$student = new Student("Galih Fitria Fijar", "230302060");
$teacher = new Teacher("Andin Ardelina", "Matematika Distrik");

echo $student->getName(); 
echo $teacher->getName(); 
?>
```

<h3>Output Polymorphism: </h3>
<img src = 'https://github.com/user-attachments/assets/7edefeb9-4179-4d2e-83d7-066b78bb7520'>


<h2>3. Encapsulation</h2>
Encapsulation menyembunyikan detail internal dari sebuah objek dan hanya
membiarkan interaksi melalui metode publik yang tersedia, menjaga data internal
tetap aman dari perubahan tak terduga.

<h3>a) Ubah atribut name dan studentID dalam kelas Student menjadi private</h3>

```php
<?php
   private $studentID;

    public function __construct($nama, $studentID)
    {
        parent::__construct($nama);
        $this->studentID = $studentID;
    }
?>
```

<h3>b) Tambahkan metode setter dan getter untuk mengakses dan mengubah nilai
atribut name dan studentID </h3>

```php
<?php
    // Getter untuk mengakses nilai Nama
    public function getName()
    {
        return "Nama Siswa: " . $this->nama;
    }
    //setter untuk mengubah nilai Nama
    public function setName($nama)
    {
        $this->nama = $nama;
    }

    //Getter untuk mengakses nilai studentID
    public function getstudentID()
    {
        return $this->studentID;
    }

    //setter untuk mengubah nilai studentID
    public function setstudentID($studentID)
    {
        $this->studentID = $studentID;
    }
}
?>
```

<h3>c) Intansiasi Objek</h3>

```php
<?php
$student = new Student("Galih Fitria Fijar", "230302060");

echo $student->getName();   // Output: Nama Siswa: Galih Fitria Fijar
echo "<br>";
echo "Student ID: " . $student->getStudentID(); // Output: Student ID: 230302060
echo "<br>";
?>
```
<h3>Script (encapsulation.php)</h3>

```php
<?php
<?php
class Person
{
    protected $nama;

    public function __construct($nama)
    {
        $this->nama = $nama;
    }

    //getter untuk mengakses nilai Nama
    public function getName()
    {
        return $this->nama;
    }
}

class Student extends Person
{
    private $studentID;

    public function __construct($nama, $studentID)
    {
        parent::__construct($nama);
        $this->studentID = $studentID;
    }

    // Getter untuk mengakses nilai Nama
    public function getName()
    {
        return "Nama Siswa: " . $this->nama;
    }
    //setter untuk mengubah nilai Nama
    public function setName($nama)
    {
        $this->nama = $nama;
    }

    //Getter untuk mengakses nilai studentID
    public function getstudentID()
    {
        return $this->studentID;
    }

    //setter untuk mengubah nilai studentID
    public function setstudentID($studentID)
    {
        $this->studentID = $studentID;
    }
}

class Teacher extends Person
{
    public $teacherID;

    public function __construct($nama, $teacherID)
    {
        parent::__construct($nama);
        $this->teacherID = $teacherID;
    }
    // Override getName untuk format berbeda
    public function getName()
    {
        return "<br> Nama Guru: " . $this->nama;
    }
}
// Contoh penggunaan
$student = new Student("Galih Fitria Fijar", "230302060");

echo $student->getName();   // Output: Nama Siswa: Galih Fitria Fijar
echo "<br>";
echo "Student ID: " . $student->getStudentID(); // Output: Student ID: 230302060
echo "<br>";
?>
```

<h3>Ouput Encapsulation: </h3>
<img src ='https://github.com/user-attachments/assets/9d118911-4e78-4101-905c-43eb51e40084'>


<h2>4. Abstraction</h2>
Abstraction adalah proses menyembunyikan detail implementasi internal dan
hanya menampilkan fungsionalitas utama kepada pengguna. Ini biasanya dicapai
dengan menggunakan kelas abstrak atau antarmuka

<h3>a) Buat kelas abstrak Course dengan metode abstrak getCourseDetails()</h3>

```php
<?php
// Kelas abstrak Course
abstract class Course
{
    // Metode abstrak yang harus diimplementasikan oleh kelas turunan
    abstract public function getCourseDetails();
}
?>
```

<h3>b) Buat kelas OnlineCourse dan OfflineCourse yang mengimplementasikan
getCourseDetails() untuk memberikan detail yang berbeda</h3>

```php
<?php
// Kelas OnlineCourse yang mengimplementasikan metode getCourseDetails()
class OnlineCourse extends Course
{
    public function getCourseDetails()
    {
        return "Course ini diadakan secara Online";
    }
}

// Kelas OfflineCourse yang mengimplementasikan metode getCourseDetails()
class OfflineCourse extends Course
{
    public function getCourseDetails()
    {
        return "Course ini diadakan secara Offline";
    }
}

?>
```
<h3>c) Instansiasi Objek</h3>

```php
<?php
$onlineCourse = new OnlineCourse();
$offlineCourse = new OfflineCourse();

echo $onlineCourse->getCourseDetails();  
echo "<br>";
echo $offlineCourse->getCourseDetails(); 
?>
```

<h3>Script (abstraction.php): </h3>

```php
<?php
// Kelas abstrak Course
abstract class Course
{
    // Metode abstrak yang harus diimplementasikan oleh kelas turunan
    abstract public function getCourseDetails();
}

// Kelas OnlineCourse yang mengimplementasikan metode getCourseDetails()
class OnlineCourse extends Course
{
    public function getCourseDetails()
    {
        return "Course ini diadakan secara Online";
    }
}

// Kelas OfflineCourse yang mengimplementasikan metode getCourseDetails()
class OfflineCourse extends Course
{
    public function getCourseDetails()
    {
        return "Course ini diadakan secara Offline";
    }
}

// Contoh penggunaan
$onlineCourse = new OnlineCourse();
$offlineCourse = new OfflineCourse();

echo $onlineCourse->getCourseDetails();  
echo "<br>";
echo $offlineCourse->getCourseDetails(); 
?>
```

<h3>Output Abstraction: </h3>
<img src ='https://github.com/user-attachments/assets/28a42eff-8c61-4196-8271-635548504042'>


<h2>Tugas</h2>
<h3>1.) Implementasikan kelas Person sebagai induk dari Dosen dan Mahasiswa</h3>

```php
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
}
?>
```
<h3>2.) Gunakan konsep Inheritance untuk membuat hierarki kelas yang memungkinkan
Dosen dan Mahasiswa memiliki atribut dan metode yang sesuai dengan perannya</h3>

Class Dosen

```php
<?php
class Dosen extends Person
{
    public $nidn;

    public function __construct($nama, $nidn)
    {
        parent::__construct($nama);
        $this->nidn = $nidn;
    }
?>
```

Class Mahasiswa

```php
<?php
class Mahasiswa extends Person
{
    public $nim;

    public function __construct($nama, $nim)
    {
        parent::__construct($nama);
        $this->nim = $nim;
    }
?>
```

<h3>3.) Terapkan Polymorphism dengan membuat metode getRole() di kelas Person dan
override metode ini di kelas Dosen dan Mahasiswa untuk menampilkan peran yang
berbeda</h3>

metode getRole() di kelas Person

```php
<?php
    public function getRole()
    {
        return "Ini adalah orang.";
    }
?>
```

override metode getRole() di kelas Dosen

```php
<?php
   public function getRole()
    {
        return "Dosen bernama " . $this->nama . " dengan NIDN " . $this->nidn;
    }
?>
```

override metode getRole() di kelas Mahasiswa

```php
<?php
    public function getRole()
    {
        return "Mahasiswa bernama " . $this->nama . " dengan NIM " . $this->nim;
    }
?>
```
<h3>4.) Gunakan Encapsulation untuk melindungi atribut nidn di kelas Dosen dan nim di kelas Mahasiswa</h3>

Encapsulation untuk melindungi atribut nidn di kelas Dosen

```php
<?php
class Dosen extends Person
{
    private $nidn;
}
?>
```

Encapsulation untuk melindungi atribut nidn di kelas Mahasiswa

```php
<?php
class Mahasiswa extends Person
{
    private $nim;
}
?>
```
<h3>Script (tugas.php)</h3>

```php
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
?>
```

<h3>Output point 1-4 </h3>
<img src ='https://github.com/user-attachments/assets/101ba96c-1a9a-46fa-b474-d10a3c5bd2df'>

<h3>5.) Buat kelas abstrak Jurnal dan implementasikan konsep Abstraction dengan
membuat kelas turunan JurnalDosen dan JurnalMahasiswa yang masing-masing
memiliki cara tersendiri untuk mengelola pengajuan jurnal</h3>

```php
<?php
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
?>
```

<h3>Output point 5 </h3>
<img src ='https://github.com/user-attachments/assets/9a42f38d-c4aa-43ec-8397-f53e1e663352'>



