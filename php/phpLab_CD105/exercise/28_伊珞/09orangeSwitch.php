<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>09orangeSwitch_php</title>
</head>
<body>
	<h3>您的價格為</h3>
	
	<?php

	settype($_GET["kg"],"integer");
	settype($_GET["level"],"integer");
	$kg = $_GET["kg"];
	$level = $_GET["level"];

	switch ($level){
		case "1":
			if ($kg > 100){
				$price = 20;
			}elseif ($kg > 40){
				$price = 25;
			}else{
				$price = 30;
			}
			$total = $kg * $price;
			break;
		case "2":
			if ($kg > 100){
				$price = 15;
			}elseif ($kg > 40){
				$price = 20;
			}else{
				$price = 25;
			}
			$total = $kg * $price;
			break;
		case "3":
			if ($kg > 100){
				$price = 10;
			}elseif ($kg > 40){
				$price = 15;
			}else{
				$price = 20;
			}
			$total = $kg * $price;
			break;
		default:
			$total = "輸入錯誤";
			break;
	}

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
	</table>";

	?>
	


</body>
</html>