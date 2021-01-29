<?php 
$n = array("hello"=>1,"hi"=>2,"alo"=>31,3=>42,"p"=>2);

echo "<pre>";
print_r($n);
echo "</pre>";

if(!empty($n)){
	foreach ($n as $key => $value) {
		echo $value."<br>";
}

}

 ?>