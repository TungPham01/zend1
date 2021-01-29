<?php 

	function ckeckEmail($value){

		$pattern = "#^\w{3,32}\@[a-z0-9]{3,}(\.[a-z]{2,4}){1,2}$#";
		$flag = false;

		if(preg_match($pattern, $value)==true){
		
			$flag = true;
		}
		return $flag;
	}

	function ckeckName($value){

		$pattern = "/^[a-z_][a-z0-9_\.\s]{4,31}$/";
		$flag = false;

		if(preg_match($pattern, $value)==true){
		
			$flag = true;
		}
		return $flag;
	}

	function ckeckPass($value){

		$pattern = "/^(?=.*\d)(?=.*\W)(?=.*[A-Z]).{8}$/";
		$flag = false;

		if(preg_match($pattern, $value)==true){
		
			$flag = true;
		}
		return $flag;
	}

	function ckeckWeb($value){

		$pattern = "#^(https?://(www\.)?|(www\.))[a-z0-9\-]{3,}(\.[a-z]{2,4}){1,2}$#";
		$flag = false;

		if(preg_match($pattern, $value)==true){
		
			$flag = true;
		}
		return $flag;
	}
	echo $result = ckeckWeb("https://www.zend.com.vn");

 ?>