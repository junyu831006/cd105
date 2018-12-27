<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<style>
		h1, div{
			text-align: center;
			color: lightgreen;
		}
		table{
			color: lightsalmon;
			margin: auto;
			width: 500px;
		}
	</style>
</head>
<body>
	<h1>您的消費資料為</h1>
	<?php  
	$x =$_GET["price"];
	$y =$_GET["num"];
	$total = $x * $y;

	if ($total>=500) {
		$total*=0.9;
	}
	echo "
	<table border='1'>
		<tr>
			<td>單價</td>
			<td>
				{$x	}
			</td>
		</tr>
		<tr>
			<td>數量</td>
			<td>
				{$y}
            </td>
		</tr>
		<tr>
            <td>小計</td>
            <td>
            	{$total}		
            </td>
        </tr>
    </table>"
	?>
</body>
</html>