<?php 
	session_start();

	$_SESSION["name"] = "Phạm duy tùng";

	echo $_SESSION["name"];

	echo "<pre>";
	print_r($_SESSION["name"]);
	echo "</pre>";
 ?>