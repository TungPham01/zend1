<?php 

	$a = ["name" => "PHP" , "Time"=>200];

	echo "<pre>";
	print_r($a);
	echo "</pre>";

	 $b = array_values($a);
	 echo "<pre>";
	print_r($b);
	echo "</pre>";

	$c = array_keys($a);
	 echo "<pre>";
	print_r($c);
	echo "</pre>";
	echo $a["name"];
 ?>