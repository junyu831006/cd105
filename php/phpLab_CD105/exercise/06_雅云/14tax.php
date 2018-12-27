<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>14tax</title>
	<style type="text/css">
		body{
			text-align: center;
		}

		table,td{
			border-collapse: collapse;
			border: 1px solid black;
			margin: auto;
			padding: 10px;
		}

		
	</style>
</head>
<body>


	<table>
			<tr>
				<td colspan="4">100年度綜合所得稅速算公式</td>
			</tr>
			<tr>
				<td>級別</td>
				<td>級距</td>
				<td>稅率</td>
				<td>累進稅差</td>
			</tr>
			<tr>
				<td>1</td>
				<td>0~500,000元</td>
				<td>5%</td>
				<td>0</td>
			</tr>
			<tr>
				<td>2</td>
				<td>500,001~1,130,000元</td>
				<td>12%</td>
				<td>35,000元</td>
			</tr>
			<tr>
				<td>3</td>
				<td>1,130,001~2,260,000元</td>
				<td>20%</td>
				<td>125,400元</td>
			</tr>
			<tr>
				<td>4</td>
				<td>2,260,001~4,230,000元</td>
				<td>30%</td>
				<td>351,400元</td>
			</tr>
			<tr>
				<td>5</td>
				<td>4,230,001元以上</td>
				<td>40%</td>
				<td>774,400元</td>
			</tr>

	</table>

	<?php  

	$number=$_GET["number"];
	$total=0;

	if ($number<500000){
		$total=$number*0.05;
	}
	elseif ($number<1130000) {
		$total=$number*0.12-35000;
	}
	elseif ($number<2260000) {
		$total=$number*0.20-125400;
	}
	elseif ($number<4230000){
		$total=$number*0.30-351400;
	}
	else{
		$total=$number*0.40-774400;
	}


	echo "<br>應繳稅額：".$total;
	?>
</body>
</html>