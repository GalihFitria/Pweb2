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