<?php 
	$canNang = $_POST["kg"];
	$chieuCao = $_POST["m"];
	$BMI = $canNang / ($chieuCao*$chieuCao);
	echo "chỉ số BMI: " . $BMI . "<br>";

	if($BMI<18.5)
	{
		echo "dưới chuẩn";
	}
	elseif ($BMI>=18.5 && $BMI<=24.9) {
		echo "Bình thường";
	}
	elseif ($BMI>=25 && $BMI<=29.9) {
		echo "thừa cân";
	}
	elseif ($BMI>=30 && $BMI<=34.9) {
		echo "Béo phì cấp 1";
	}
	elseif($BMI>=35 && $BMI<=39.9) {
		echo "Béo phì cấp 2";
	}
	else{
		echo "Béo phì cấp độ 3";
	}

 ?>