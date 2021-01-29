<?php 
	$key = array("name"=>"linh","age","add");
	$value = array("tùng",21,"hn");

	$array = array_combine($key, $value);

	echo "<pre>";
	print_r($array);
	echo "</pre>";


 ?>