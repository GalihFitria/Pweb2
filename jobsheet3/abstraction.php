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
