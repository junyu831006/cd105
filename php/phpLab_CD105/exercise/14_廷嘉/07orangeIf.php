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
		$ini_total = $_POST["price"] * $_POST["num"];
		// echo "原消費金額： $ini_total 元<br>";
		settype($ini_total,"integer");
		if($ini_total>=1000){
			$total = $ini_total*0.7;
		}elseif ($ini_total>=500) {
			$total = $ini_total*0.9;
		}
		// echo "打折後金額： $total 元<br>";


		echo "<div class='title'>您的消費資料為</div>";
		echo "<table border='1' width='500'>
		<tr>
			<td>單價</td>
			<td>{$_POST["price"]}</td>
		</tr>
		<tr>
			<td>數量</td>
			<td>{$_POST["num"]}</td>
		</tr>
		<tr>
			<td>小計(已折扣)</td>
			<td>{$total}</td>
		</tr>
		</table>"; 
	 ?>
</body>
</html>