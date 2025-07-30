<?php
class Student{
	public function setStudent(){
		echo "student information<br>";
	}
}

class Name extends Student{
	public function setStudent(){
		echo "Shiya Antala<br>";
	}
}

class Age extends Student{
	public function setStudent(){
		echo "21<br>";
	}
}

function studentInfo(Student $student){
	$student->setStudent();
}

$name = new Name();
$age = new Age();

studentInfo($name);
studentInfo($age);
?>