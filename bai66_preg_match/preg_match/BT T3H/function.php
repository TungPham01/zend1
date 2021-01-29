<?php 
	function checkInput($value,$type="name"){
		switch ($type) {
			case 'name':
				$pattern = "#([^\d]*)\s([^\d]*)#";
				break;
			case 'phone':
				$pattern = "#^[0-9]{10}$#";
				break;
			case 'email':
				$pattern = "#^([a-zA-Z0-9]{3,})@([a-zA-Z0-9]{3,})#";
				break;
			case 'birthday':
				$pattern = "#^[0-9]{4}-[0-9]{2}-[0-9]{2}$#";
				break;
			case 'website':
				$pattern = "#^(https:\/\/github\.com\/)([a-zA-Z0-9]{3,})$#";
				break;
			case 'point':
				$pattern = "#^0?\d{1}0?$#";
				break;
			case 'note':
				$pattern = "#^[\d\w\W]{0,200}$#";
				break;
				
		}
		$flag = preg_match($pattern, $value);
		return $flag;
	}
	// echo $result = checkInput("0ádasdas2","note");
	
 ?>