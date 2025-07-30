<?php

	class books{

	public $title = "Jane Eyre<br>";
	protected $Author = "charlotte bronte";

	public function returnAuthor(){
		return $this->Author;
}

}
$books = new books();
echo $books->title;
echo $books->returnAuthor();
?>