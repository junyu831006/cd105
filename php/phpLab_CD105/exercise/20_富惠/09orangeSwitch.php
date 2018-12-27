<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<?php  
	$level=$_GET["level"];
	$weight=$_GET["weight"];

	switch($level){
		case"1":
		if($weight>=100){
			$amount=$weight*20;
		}
		elseif($weight>40){
			$amount=$weight*25;
		}
		else{
			$amount=$weight*30;
		}
		break;

	}
	switch($level){
		case"2":
		if($weight>100){
			$amount=$weight*15;
		}
		if($weight>40){
			$amount=$weight*20;
		}
		if($weight<40){
			$amount=$weight*25;
		}
		break;
	}
	switch($level){
		case"3":
		if($weight>100){
			$amount=$weight*10;
		}
		if($weight>40){
			$amount=$weight*15;
		}
		if($weight<40){
			$amount=$weight*20;
		}
		break;
	}


	echo "$amount";

?>
	
</body>
</html>