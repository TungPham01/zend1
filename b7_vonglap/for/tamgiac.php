<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
		a{
			font-size: 30px;
			margin-right: 30px;
			margin-left: 60px;
		}
		
		.divto{
			/*text-align: center;*/
			border: 1px solid black;
			width: 700px;
			margin: 0 auto;
			margin-top: 50px;
		}
		.divto h1{
			margin-top:0px; 
			text-align: center;
		}
		p{
			margin-left: 350px;
		}
	</style>
</head>
<body>

	<div class="divto">
		<h1>in tam giác</h1>
		<div class="nho">
			<a href="tamgiac.php?type=1">Tam giác 1</a>
			<a href="tamgiac.php?type=2">Tam giác 2</a>
			<a href="tamgiac.php?type=3">Tam giác 3</a>
			<p>
				<?php 
					if(isset($_GET["type"])){
						 $type = $_GET["type"];
						 switch ($type) {
						 	case 1:
						 		$i =1;
						 		while($i <= 7){
						 			$result = str_repeat("*", $i)."<br>";
						 			$i++;
						 			echo $result;
						 		} 
						 		break;
						 	case 2:
								for($i=1;$i<=7;$i++){
									for ($j=1+$i; $j <= 7; $j++) { 
										echo "*";
									}
									echo "<br>";
								}

						 		break;
						 	case 3:
						 		for($i=1;$i<=7;$i++){
						 			$space = str_repeat("&ensp;", 7-$i);
						 			$charector = str_repeat("*", $i*2-1);
						 			echo $result = $space.$charector."<br>";
						 		}
						 		break;
						 	
						 }
					}
						
				?>
			</p>
		</div>
	</div>
</body>
</html>