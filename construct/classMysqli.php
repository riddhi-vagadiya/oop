<?php

	class mysql{
		
		protected $host;
		protected $user;
		protected $password;
		protected $dbname;
		public $result;

		public function __construct(){
			$this->host = "localhost";
			$this->user = "root";
			$this->password = "";
			$this->dbname = "beauty_shop";
			$conn = mysqli_connect($this->host,$this->user,$this->password,$this->dbname);

		if(!$conn){
			$this->result = "connection error....";
			echo $this->result;
		}else{
			$this->result = "database connected....";
			echo $this->result;
		}
	}
}

?>