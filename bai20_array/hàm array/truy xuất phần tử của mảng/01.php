<?php 
	$n = array("phạm","duy","tùng","boong");
	$b = array ("hà nội"=>"HÀ NỘI","hải phong"=>"HẢI PHÒNG","tphcm"=>"THÀNH PHỐ HỒ CHÍ MINH");

	echo "<pre>";
	print_r($n);
	echo "</pre>";

	echo "Current: ".current($n)."<br>";	
	echo "Next: ".next($n)."<br>";	
	echo "Current: ".current($n)."<br>";	
	echo "Previous: ".prev($n)."<br>";	
	echo "End: ".end($n)."<br>";	
	echo "RESET: ".reset($n)."<br>";	

 ?>