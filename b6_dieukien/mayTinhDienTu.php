<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
		.a{
			margin: 0 auto;
			width: 600px
		}
		.container{
			text-align: center;
			margin-top:55px;
			border: 1px solid black;
			padding-bottom: 15px; 
		}
		h1{
			margin-top: 15px;
			color: red;
		}
		p{
			font-size: 20px;
		}

	</style>
</head>
<body>
	<?php
	$soThuNhat = "";
	$soThuHai = "";
	$phepToan = "";
	$flag = true;

	if(isset($_POST["soThuNhat"]) &&  isset($_POST["soThuHai"]) && isset($_POST["phepToan"])){
		$soThuNhat = $_POST["soThuNhat"];
		$soThuHai = $_POST["soThuHai"];
		$phepToan = $_POST["phepToan"];
		
	}
	// $kq = 0;
	if(is_numeric($soThuHai) && is_numeric($soThuNhat)){
		switch ($phepToan) {
		case '+':
			$kq = $soThuHai+$soThuNhat;
			break;
		case '-':
			$kq = $soThuNhat-$soThuHai;
			break;
		case '*':
		case 'x':
		case 'X':
			$kq = $soThuNhat*$soThuHai;
			break;
		case '/':
		case ':':
			$kq = $soThuNhat/$soThuHai;
			break;
		case '%':
			$kq = $soThuNhat%$soThuHai;
			break;
		default:
			$kq1 =  "error";
			$kq = strtoupper($kq1);
			$flag = false;
	}
	}else{
		$kq = "ERROR";
		$flag = false;
	}
	
  ?>
	<div class="a">
		<div class="container">
			<h1>Mô phỏng máy tính điện tử</h1>
			<form action="" method = "post" name="main">
				số thứ nhất: <input type="text" name="soThuNhat" value="<?php echo $soThuNhat ?>" ><br><br>
				phép toán: 	<input type="text" name="phepToan" value="<?php echo $phepToan ?>"><br><br>
				số thứ hai: <input type="text" name="soThuHai" value="<?php echo $soThuHai ?>"><br><br>
							<input type="submit" value= "tinhToan" name="sb">
				<p> 
					<?php 
						if($flag == true){
							 echo "KẾT QUẢ: "."<b>".$soThuNhat.$phepToan.$soThuHai." = " . $kq;
						}else{
							echo $kq;
						}
					?>
				</p>
			</form>
		</div>
	</div>
	
</body>
</html>