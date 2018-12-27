<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>PHP作業四-接收頁</title>
	<style type="text/css">
		td{
			text-align: center;
		}
		.title{
			text-align: center;
			width: 500px;
		}
	</style>
</head>
<body>
	<?php
		settype($_POST["level"],"integer");
		settype($_POST["num"],"integer");
		$level=$_POST["level"];
		$num=$_POST["num"];
		// echo "$level";
		// echo "$num";
		switch ($level) {
			case '1':
				if($num>100){
					$total=$num*20;
					$per_price = 20;
				}elseif ($num>40) {
					$total=$num*25;
					$per_price = 25;
				}elseif ($num<=40) {
					$total=$num*30;
					$per_price = 30;
				}
				break;
			case '2':
				if($num>100){
					$total=$num*15;
					$per_price = 15;
				}elseif ($num>40) {
					$total=$num*20;
					$per_price = 20;
				}elseif ($num<=40) {
					$total=$num*25;
					$per_price = 25;
				}
				break;
			case '3':
				if($num>100){
					$total=$num*10;
					$per_price = 10;
				}elseif ($num>40) {
					$total=$num*15;
					$per_price = 15;
				}elseif ($num<=40) {
					$total=$num*20;
					$per_price = 20;
				}
				break;
									
			default:
				echo "出錯囉";
				break;
		}

		
		echo "<div class='title'>您的消費資料為</div>";
		echo "<table border='1' cellspacing='0'  width='500'>
		<tr>
			<td>等級</td>
			<td>{$_POST["level"]}</td>
		</tr>
		<tr>
			<td>公斤數</td>
			<td>{$_POST["num"]}</td>
		</tr>
		<tr>
			<td>每公斤單價</td>
			<td>$per_price</td>
		</tr>
		<tr>
			<td>小計</td>
			<td>{$total}</td>
		</tr>
		</table>"; 
	 ?>
</body>
</html>