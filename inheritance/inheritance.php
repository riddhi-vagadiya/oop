<?php 
	
	class Father{
		
		public $cash = "10000";
		protected $data = "Mobile, Gold Chain, clothes, Diary";
		private $wallet = "Allen solly";

		public function returndata(){
			echo $this->data;
		}
		public function returnwallet(){
			echo $this->wallet;
		}
}

	class Daughter extends Father{
	
	}

	$obj = new Daughter();
	echo $obj->returndata();
	echo $obj->returnwallet();

?>