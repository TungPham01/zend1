<?php 
	function hello(&$var  = 7){
		 $var++;
	}
$a =5;
$b = 7;
 hello($b);
echo $b;
 ?>
