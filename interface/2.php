<?php

	interface books{
		public function getName();
	}

	class reading implements books{
		public function getName(){
			echo "Pride and Prejudice<br>";
		}
	}

	class writing implements books{
		public function getName(){
			echo "The lord of the rings";
		}
	} 

$reading = new reading();
$reading->getName();

$writing = new writing();
$writing->getName();

?>