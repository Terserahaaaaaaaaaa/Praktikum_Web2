<?php

// 1. Buat Kelas Person
class Person {
    //atribut
    protected $name;

    public function __construct($name) {
        $this->name = $name;
    }

    public function getName() {
        return $this->name;
    }
}

// Kelas Student yang mewarisi dari Person
class Student extends Person {
    private $studentID;

    public function __construct($name, $studentID) {
        parent::__construct($name);
        $this->studentID = $studentID;
    }

    public function getName() {
        return "Nama Siswa: " . $this->name;
    }

    public function getStudentID() {
        return $this->studentID;
    }

    public function setName($name) {
        $this->name = $name;
    }

    public function setStudentID($studentID) {
        $this->studentID = $studentID;
    }
}

// 2. Buat Kelas Teacher yang juga mewarisi dari Person
class Teacher extends Person {
    private $teacherID;

    public function __construct($name, $teacherID) {
        parent::__construct($name);
        $this->teacherID = $teacherID;
    }

    public function getName() {
        return "Nama Guru: " . $this->name;
    }

    public function getTeacherID() {
        return $this->teacherID;
    }
}

// 4. Buat Kelas abstrak Course
abstract class Course {
    abstract public function getCourseDetails();
}

// Kelas OnlineCourse yang mengimplementasikan Course
class onlineCourse extends Course {
    public function getCourseDetails() {
        return "ini online cource";
    }
}

// Kelas OfflineCourse yang mengimplementasikan Course
class offlineCourse extends Course {
    public function getCourseDetails() {
        return "ini offline cource";
    }
}

//implementasi
$student = new Student("Fatma", "F123");
$teacher = new Teacher("Abda'u", "A456");


echo $student->getName() . PHP_EOL;
echo "<br>";
echo "Student ID: " . $student->getStudentID() . PHP_EOL;
echo "<br>";
echo "<br>";
echo $teacher->getName() . PHP_EOL;
echo "<br>";
echo "Teacher ID: " . $teacher->getTeacherID() . PHP_EOL;
echo "<br>";

$onlineCourse = new onlineCourse();
$offlineCourse = new offlineCourse();

echo $onlineCourse->getCourseDetails() . PHP_EOL;
echo $offlineCourse->getCourseDetails() . PHP_EOL;

?>