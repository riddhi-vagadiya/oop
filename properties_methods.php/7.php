<?php
class Mobile {
    public $brand;
    protected $ram;

    public function __construct($brandName) {
        $this->brand = $brandName;
        $this->ram = "4GB"; // default RAM
    }

    public function setRam($ramSize) {
        $this->ram = $ramSize;
    }

    public function getRam() {
        return $this->ram;
    }
}

$mobiles = [
    new Mobile("Samsung"),
    new Mobile("Realme"),
    new Mobile("iPhone")
];

$mobiles[0]->setRam("6GB");
$mobiles[1]->setRam("8GB");
$mobiles[2]->setRam("12GB");

foreach ($mobiles as $mobile) {
    echo "📱 Brand: " . $mobile->brand . " - RAM: " . $mobile->getRam() . "<br>";
}
?>
