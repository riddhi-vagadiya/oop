<?php
 
class Car {
    public $fullname;
    protected $color;
 
    public function __construct($name) {
        $this->fullname = $name;
        $this->color = "Black"; // default
    }
 
    public function setColor($newColor) {
        $this->color = $newColor;
    }
 
    public function returncolor() {
        return $this->color;
    }
}
 
$cars = [
    new Car("BMW"),
    new Car("Audi"),
    new Car("Ferrari")
];
 
// Set different colors
$cars[0]->setColor("Red");
$cars[1]->setColor("Blue");
$cars[2]->setColor("Yellow");
 
foreach ($cars as $car) {
    echo $car->fullname . " - " . $car->returncolor() . "<br>";
}
 
?>