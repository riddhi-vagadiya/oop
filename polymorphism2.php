<?php
class Chocolate{
	public function setChocolate(){
		echo "Chocolate info<br>";
	}
}

class Name extends Chocolate{
	public function setChocolate(){
		echo "kit kat<br>";
	}
}

class quantity extends Chocolate{
	public function setChocolate(){
		echo "10<br>";
	}
}

function ChocolateInfo(Chocolate $chocolate){
	$chocolate->setChocolate();
}

$name = new Name();
$quantity = new Quantity();

ChocolateInfo($name);
ChocolateInfo($quantity);
?>