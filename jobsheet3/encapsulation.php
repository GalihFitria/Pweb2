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
