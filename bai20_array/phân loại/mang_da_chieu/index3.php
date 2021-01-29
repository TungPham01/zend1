<?php 
	$student = array("SV001"=> array(
									"name"=>"tùng",
									"sex" => 1,
									"score" => array(6,7,8)
		
		)
					
			
	);
	

	echo "<pre>";
	print_r($student);
	echo "<pre>";
	$total = 0;
	foreach ($student as $key => $value) {
		
		echo $a = array_sum($value["score"]);


	}

 ?>