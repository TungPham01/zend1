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
				"score"=>array("khá"=>6,"giỏi"=>7,"xuất sắc"=>8)
		),
		"SV003" =>array(
				"name"=>"linh",
				"subject"=>"chemestry",
				"score"=>array(8,9,10)
				)

	);
	echo "<pre>";
	print_r($student);
	echo "</pre>";

	echo $student["SV002"]["name"]."<br>";
	echo $student["SV003"]["score"][1]."<br>";
	$student["SV002"]["name"] = "hiếu";
	$student["SV003"]["score"][1] = 10;

	echo "<pre>";
	print_r($student);
	echo "</pre>";
 ?>