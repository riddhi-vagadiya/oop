<?php

	class Beauty{

	public $haircut = "Long layers<br>";
	protected $Nailpaint = "Gliter polish<br>";
	protected $Makeup = "Lipstick";
	
	public function returnNailpaint(){
		return $this->Nailpaint;
}
	public function returnMakeup(){
		return $this->Makeup;
	}
}


$Beauty = new Beauty();
echo $Beauty->haircut;
echo $Beauty->returnNailpaint();
echo $Beauty->returnMakeup();
?>