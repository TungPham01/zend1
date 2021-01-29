<?php 
function tinhTong($value){
			$sum = 0;
			while($value>0)
			{
				$n = $value %10;
				$sum += (int)$n;
				$value = ($value - $n)/10;
				echo $value." ".$sum."<br>";
			}
			return $sum;
		}
 ?>