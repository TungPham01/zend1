<?php 

	$a = ["name" => "PHP" , "Time"=>200,"during"=>"6 thang"];

	echo "<pre>";
	print_r($a);
	echo "</pre>";

	 echo $b = array_pop($a);
	 echo "<pre>";
	print_r($b);
	echo "</pre>";

	$c = array_shift($a);
	 echo "<pre>";
	print_r($c);
	echo "</pre>";

	echo $a["Time"];
 ?>