<?php 

	$currentadd = date_default_timezone_set("asia/ho_chi_minh"); // thiết lập múi giờ
	$timeZone = date_default_timezone_get($currentadd ); // lấy ra múi giờ hiện tại
	echo $timeZone;
	$getTime = getdate(); // lấy ra thời gian đã được thiết lập
	echo "<pre>";
	print_r($getTime);
	echo "</pre>";
	$localZone = timezone_identifiers_list(16);
	echo "<pre>";
	print_r($localZone);
	echo "</pre>";

 ?>