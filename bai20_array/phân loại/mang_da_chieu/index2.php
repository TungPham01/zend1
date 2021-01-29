<?php 
	$student = array(
		"SV001"=>array(
			"name"=>"tùng",
			"subject"=>"math",
			"score"=>array(5,6,7)
		),
		"SV002" =>array(
				"name"=>"việt",
				"subject"=>"english",
				"score"=>array(6,7,8)
		),
		"SV003" =>array(
				"name"=>"linh",
				"subject"=>"chemestry",
				"score"=>array(8,9,10)
				)

	);
	
	$score = [5,6,3,1,2,3];
	echo "<pre>";
	print_r($score);
	echo "</pre>";
	
	// xuất ra thông tin của các sv và tổng số điểm của các sv đó
	if(!empty($student)){
		
		foreach ($student as $key => $value) {
			$name = $value["name"];
			$subject = ($value["subject"]=="math")? "tự nhiên" : "khác" ;
			$score = $value["score"] ;

			$total = 0;
			for($i= 0;$i<count($score);$i++){
				$total += $score[$i];
			}
			echo $name."-".$subject."-".$total."<br>";

	}
	}
	
 ?>