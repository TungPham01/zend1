<?php 
	session_start();

	if(!isset($_SESSION["name"])){
		echo $_SESSION['name'] = 10;
	}else{
		echo $_SESSION['name'] = 20;
	}


 ?>