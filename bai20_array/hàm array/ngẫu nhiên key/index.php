<?php 
	$n = array(1,2,31,42);
	$b = array ("hà nội"=>2,"hải phòng"=>3,"tphcm"=>4);

	$c = array_rand($b,2);

	echo "<pre>";
	print_r($c);
	echo "</pre>";
 ?>