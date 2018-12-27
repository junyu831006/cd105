<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<style>table{
			width: 400px;
			margin: auto;
			border-collapse: collapse;
			color: lightsalmon;
	</style>
</head>
<body>
	<?php 
		$rank=$_GET["rank"];
		$qty=$_GET["qty"];
		$total=0;
		switch ($rank) {
			case '1':
			if ($qty>=100) {
				$total=$qty*20;
			}elseif ($qty>40) {
				$total=$qty*25;
			}else{
				$total=$qty*30;
			}
				break;
			case '2':
			if ($qty>=100) {
				$total=$qty*15;
			}elseif ($qty>40) {
				$total=$qty*20;
			}else{
				$total=$qty*25;
			}
				break;
			case '3':
			if ($qty>=100) {
				$total=$qty*10;
			}elseif ($qty>40) {
				$total=$qty*15;
			}else{
				$total=$qty*20;
			}	
				break;
		}
	 ?>
	<div>
	    <table border='1'>
	    	<tr>
	    		<td>等級</td>
	    		<td><?php echo $rank; ?></td>
	    	</tr>
	    	<tr>
	    		<td>購買 :</td>
	    		<td><?php echo $qty; ?></td>
	    	</tr>
	    	<tr>
	    		<td>總計 :</td>
	    		<td><?php echo $total; ?></td>
	    	</tr>
	    </table>
	</div>
</body>
</html>