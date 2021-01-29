<?php 
	$n = array("phạm","duy","tùng","boong");
	$b = array ("hà nội"=>"HÀ NỘI","hải phong"=>"HẢI PHÒNG","tphcm"=>"THÀNH PHỐ HỒ CHÍ MINH");

	echo "<pre>";
	print_r($n);
	echo "</pre>";

	shuffle($n);

	echo "<pre>";
	print_r($n);
	echo "</pre>";
 ?>