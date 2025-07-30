<?php
class Animal {
    public $name; 

    public function sound() { 
        echo "$this->name makes a sound.<br>";
    }
}

$Animal = new Animal();
$Animal->name = "Dog";
$Animal->sound(); 

$Animal = new Animal();
$Animal->name = "Cat";
$Animal->sound(); 
?>
