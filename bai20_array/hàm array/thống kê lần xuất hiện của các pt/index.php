<?php 
	$n = array(1,2,31,42,1,1,1,2,2,2,31,31,42,31);

	echo "<pre>";
	print_r($n);
	echo "</pre>";

	$b = array_count_values($n);

	echo "<pre>";
	print_r($b);
	echo "</pre>";


	
 ?>