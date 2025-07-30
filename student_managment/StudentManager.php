<?php
require 'student.php';

class StudentManager {
	private $file = 'student.txt';

	public function saveStudent($student) {
		$data = $student->toString();
		file_put_contents($this->file, $data, FILE_APPEND); 
	}

	public function getAllStudents() {
		$students = [];

		if (file_exists($this->file)) {
			$lines = file($this->file);
			foreach ($lines as $line) {
				$parts = explode(' | ', trim($line));
				if (count($parts) === 3) {
					$students[] = new Student($parts[0], $parts[1], $parts[2]); 
				}
			}
		}

		return $students;
	}
}
?>
