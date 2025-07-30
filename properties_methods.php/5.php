<?php

	class chocolate{

	public $name = "Ferrero Rocher<br>";
	protected $fname = "Dark chocolate";

	public function  returnfname(){
		return $this->fname;
}
}
$chocolate = new chocolate();
echo $chocolate->name;
echo $chocolate->returnfname();
?>