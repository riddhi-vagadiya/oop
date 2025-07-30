<?php

class Student {
	private $name;
	private $email;
	private $age;

	public function __construct($name, $email, $age) {
		$this->name = $name;
		$this->email = $email;
		$this->age = $age;
	}

	public function getData() {
		return [
			'name' => $this->name,
			'email' => $this->email,
			'age' => $this->age
		];
	}

	public function toString() {
		return $this->name . ' | ' . $this->email . ' | ' . $this->age . "\n";
	}
}
?>
