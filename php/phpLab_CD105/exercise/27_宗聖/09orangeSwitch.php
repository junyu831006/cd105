<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>09orangeSwitch</title>
	<style type="text/css">
		.wrap1{
			width: 960px;
			margin: auto;
			margin-left:500px;
		}
		table{
			width: 500px;

		}
		td{
		}
	</style>
</head>
<body>
<div class="wrap1">
	<h2>橘子的單價和等級的關係如下</h2>
	<?php 
		$level = $_REQUEST["level"];
		$weight = $_REQUEST["weight"];
		$price  = 0;

		//等級規則
		switch ($level) {
			case 1:
				if($weight>100){
					$price=20;			
				}
				elseif($weight>40){
					$price=25;
				}
				elseif($weight<=40&&$weight>=0){
					$price=30;
				}
				break;
			case 2:
				if($weight>100){
					$price=15;			
				}
				elseif($weight>40){
					$price=20;
				}
				elseif($weight<=40&&$weight>=0){
					$price=25;
				}
				break;
			case 3:
				if($weight>100){
					$price=10;			
				}
				elseif($weight>40){
					$price=15;
				}
				elseif($weight<=40&&$weight>=0){
					$price=20;
				}
				break;
				default:
				echo "錯誤";
				break;
		}
		//計算
		$total = $price * $weight;
		
	 ?>
	<table>
	 	<tr>
	 		<td>等級</td>
	 		<td><?php echo "{$level}"; ?></td>
	 	</tr>
	 	<tr>
	 		<td>公斤數(1-999公斤)</td</td>
	 		<td><?php echo "{$weight}"; ?></td>
	 	</tr>
	 	<tr>
	 		<td>總價</td>
	 		<td><?php echo "{$total} <br> (每公斤價格為{$price})"; ?></td>
	 	</tr>
	 </table>
</body>
</html>