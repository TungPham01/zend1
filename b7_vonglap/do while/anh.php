<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
		.to{
			margin: 0 auto;
			width: 500px;
			text-align: center;
			border: 1px solid black;
		}
		h1{
			color:red;
			font-size: 30px;
		}
		img{
			width: 100%;
			margin-top : 20px;
			/*height: 100px;*/
		}
	</style>
</head>
<body>
<div class="to">
	<h1>IMAGE</h1>
	<div class = "image">
		<?php 
			$i = 1;
			do{
				echo '<img src="a'.$i.'.JPG">';
				$flag = 0;
				
				if(isset($_GET["show"])){
					$flag= $_GET["show"];
					 $i++;
				}
				
			}while ($i<6 && $flag == 1) ;
		 ?>
		<a href="anh.php?show=1">Show all</a>
		
	</div>
</div>
</body>
</html>