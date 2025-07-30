<?php

	interface animal {
		public function getName();
	}
	class pet implements Animal {
		public function getName(){
			echo "dog<br>";
		}
	}
	class peet implements Animal{
		public function getName(){
			echo "cat<br>";
		}
	}

$pet = new pet();
$pet->getName();

$peet = new peet();
$peet->getName();
?>