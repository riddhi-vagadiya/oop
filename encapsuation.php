<?php

class Student {
    private $name;
    private $age;

    public function setStudent($name, $age) {
        if ($age > 0) { 
            $this->name = $name;
            $this->age = $age;
        } else {
            echo "Invalid age!<br>";
        }
    }

    public function getName() {
        return $this->name;
    }

    public function getAge() {
        return $this->age;
    }
}

$student = new Student();

$student->setStudent("Khushi", 21);

echo "Student Name: " . $student->getName() . "<br>";
echo "Student Age: " . $student->getAge() . "<br>";

?>
