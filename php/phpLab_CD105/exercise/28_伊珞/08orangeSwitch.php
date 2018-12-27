<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>08orangeSwitch_php</title>
</head>
<body>
	<?php
	settype($_GET["level"],"integer");
	settype($_GET["kg"],"integer");
	$level = $_GET["level"];
	$kg = $_GET["kg"];


	if($level == "1"){
		if($kg > 100){
			$price = 20;
		}elseif ($kg > 40){
			$price = 25;
		}else{
			$price = 30;
		}
	}elseif ($level == "2") {
		if($kg > 100){
			$price = 15;
		}elseif ($kg > 40){
			$price = 20;
		}else{
			$price = 25;
		}
	}elseif ($level == "3") {
		if($kg > 100){
			$price = 10;
		}elseif ($kg > 40){
			$price = 15;
		}else{
			$price = 20;
		}
	}else{$price = 0;
		echo "輸入錯誤";
	}
	$total = $kg * $price;


	echo
	"<table class=wrap>
		<tr>
			<td>等級：</td>
			<td>{$level}</td>
		</tr>
		<tr>
			<td>公斤數：</td>
			<td>{$kg}</td>
		</tr>
		<tr>
			<td>小計：</td>
			<td>{$total}</td>
		</tr>
	</table>"
	?>
</body>
</html>