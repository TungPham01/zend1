<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<meta charset="utf-8">
</head>
<body>
<?php 
error_reporting(E_ALL & ~E_NOTICE & ~E_DEPRECATED);
	require ("function.php");

	if(isset($_POST) && !empty($_POST)){
		$error = array();

		$email = $_POST["email"];
		if(ckeckInput($email,"email")==false){
			$error["email"] = "<p>không hợp lệ</p>";
			$email = "";
		}

		$username = $_POST["name"];
		if(ckeckInput($username,"username")==false){
			$error["name"] = "<p>không hợp lệ</p>";
			$username = "";
		}

		$pass = $_POST["pass"];
		if(ckeckInput($pass,"password")==false){
			$error["pass"] = "<p>không hợp lệ</p>";
			$pass = "";
		}

		$web = $_POST["web"];
		if(ckeckInput($web,"website")==false){
			$error["web"] = "<p>không hợp lệ</p>";
			$web = "";
		}
		
	}
 ?>
<form action="#" method="post">
	<legend>Login to your account</legend><br><hr>

		<label >Email</label>
		<input type="email" name="email" value="<?php echo $email; ?>"><br>
		<p><?php echo $error["email"]; ?></p>
	

	<label >Username</label>
	<input type="text" name="name" value="<?php echo $username; ?>"><br><br>
	<?php echo $error["name"]; ?>

	<label id="pass">Password</label>
	<input type="password" name="pass" id="pass" value="<?php echo $pass; ?>"><!-- <br><br> -->
	<p>Quên mật khẩu</p>
	<?php echo $error["pass"]; ?>

	<label >WebSite</label>
	<input type="text" name="web" value="<?php echo $web; ?>"><br>
	<?php echo $error["web"]; ?>

	<input type="submit" name="sb" value="Login"><br>



</form>
</body>
</html>