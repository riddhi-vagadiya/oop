<?php

	class pen{
		public $name;
		protected $color;
		
		public function pens($name){
		$this->name = $name;
		$this->color = $name;
	}
    	public function setcolor($newColor) {
        $this->color = $newColor;
    }
 
    	public function returncolor() {
        return $this->color;
    }

}

$pen[0]->setColor("Black");
$pen[1]->setColor("Blue");
$pen[2]->setColor("Red");

foreach($pen as $pen){
	echo $pen->name. "-" . $pen->returncolor(). "<br>";
}

?>