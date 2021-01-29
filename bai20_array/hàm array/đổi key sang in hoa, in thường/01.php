<meta charset="utf-8">
<?php 
	$n = array(1,2,31,42);
	$b = array ("Hà nội"=>2,"hải phong"=>3,"tphcm"=>4);

	 $c = array_change_key_case($b,CASE_UPPER);

	 echo "<pre>";
	print_r($b);
	echo "</pre>";

	echo "<pre>";
	print_r($c);
	echo "</pre>";

	
 ?>