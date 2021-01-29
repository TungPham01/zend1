<?php 

	function ckeckInput($value,$type="email"){
		switch ($type) {
			case 'email':
				$pattern = "#^\w{3,32}\@[a-z0-9]{3,}(\.[a-z]{2,4}){1,2}$#";
				break;
			case 'username':
				$pattern = "/^[a-z_][a-z0-9_\.\s]{4,31}$/";
				break;
			case 'password':
				$pattern = "/^(?=.*\d)(?=.*\W)(?=.*[A-Z]).{8}$/";
				break;
			case 'website':
				$pattern = "#^(https?://(www\.)?|(www\.))[a-z0-9\-]{3,}(\.[a-z]{2,4}){1,2}$#";
				break;
		}
		$flag = preg_match($pattern, $value);
		return $flag;
	}
	// echo ckeckInput("phamduytung","password");
 ?>