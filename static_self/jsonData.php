<?php

	
	function getData(){
		$names = ["Suraj","Hardik","Naimish"];
		print_r($names);

		echo "<hr />";
		echo json_encode($names);

	}

	getData();
?>