<?php 
	$n = array(1,2,31,42,2);

	echo "<pre>";
	print_r($n);
	echo "</pre>";

	$sum = 0;
	for($i = 0 ; $i < count($n) ; $i++)
	{
		$sum += $n[$i];

	} echo $sum."<br>";

	foreach ($n as $key => $value) {
		$sum += $value[$key];
	}
	echo $sum;
 ?>