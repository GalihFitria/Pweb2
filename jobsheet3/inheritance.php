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
