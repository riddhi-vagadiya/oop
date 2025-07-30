<?php

	Abstract class Car{
		public $name = "BMW";
	}

	class Driver extends Car{
		public function carName(){
			echo $this->name;
		}
	}  
	$Driver = new Driver();
	$Driver->carName(); 
?>