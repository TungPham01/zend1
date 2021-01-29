<?php 
		$name = $_POST["id"];
		$pass = $_POST["pass"];
		$result = ($name == "admin" && $pass=="123456") ? "thành công" : "thất bại";
		echo $result;
	 ?>