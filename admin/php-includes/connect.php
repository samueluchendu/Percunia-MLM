<?php
	$db_host = "localhost:3308";
	$db_user = "root";
	$db_pass = "";
	$db_name = "mlm-test";
	
	$con =  mysqli_connect($db_host,$db_user,$db_pass,$db_name);
   // $connection = mysqli_connect('localhost', 'root', '', 'mlm');
      
	

	if(mysqli_connect_error()){
		echo 'connect to database failed';
	}

?>