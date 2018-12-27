<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>08orangeIf.php</title>
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
		$sum = 0;
		
		if($level == 1){
			if ($weight >= 100) {
				$price =20;
			 	$sum  = $weight*$price;
			 }elseif ($weight >= 40) {
			 	$price =25;
			 	$sum  = $weight*$price;
			 }else{
			 	$price =30;
			 	$sum  = $weight*$price;
			 };
		}
	
		if($level == 2) {
			if ($weight >= 100) {
				$price =15;
			 	$sum  = $weight*$price;
			 }elseif ($weight >= 40){
			 	$price = 20;
			 	$sum  = $weight*$price;
			 }else{
			 	$price =25;
			 	$sum  = $weight*$price;
			 };
		}
		if($level == 3) {
			if ($weight >= 100) {
				$price =10;
			 	$sum  = $weight*$price;
			 }
			 elseif ($weight >= 40) {
			 	$price =15;
			 	$sum  = $weight*$price;
			 }
			 else{
			 	$price =20;
			 	$sum  = $weight*$price;
			 };
		}
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
	 		<td><?php echo "{$sum}元 <br> (一公斤是{$price}元)"; ?></td>
	 	</tr>
	 </table>
</div>