<?php

	class Father{
		public $jameen = "30vigha";
		private $content = "Gold,silver,cash";
		protected $car = "i20";
	}
	Trait Nana{
		public $Njameen = "70vigha";
	}

	class Daughter extends Father{
		use Nana;
		public function jameenName(){
			echo " Father jameen".$this->jameen."and Nana jameen".$this->Njameen;
		}
	}

	$obj = new Daughter();
	$obj->jameenName();

?>

