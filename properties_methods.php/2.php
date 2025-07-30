<?php

	class car{
	
	public $brand = "BMW<br>";
	protected $color = "black<br>";
	protected $feature = "Auto";

	public function returnColor(){
		return $this->color;
}
	public function returnFeature(){
		return $this->feature;
	}
}
$car = new car();
echo $car->brand;
echo $car->returnColor();
echo $car->returnFeature();
?>