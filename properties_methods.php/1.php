<?php

class Abc {
    public $name = "Denisha shingala<br>"; 
    protected $contact = "9863454655<br>";
    protected $email = "deni12@gmail.com";

    public function returnNumber(){
        return $this->contact;
    }

    public function returnEmail(){
        return $this->email;
    }
}

$Abc = new Abc();
echo $Abc->name;
echo $Abc->returnNumber();
echo $Abc->returnEmail();
?>
