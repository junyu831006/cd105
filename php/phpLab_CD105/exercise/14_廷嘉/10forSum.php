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
		settype($_POST["num"],"integer");
		$num=$_POST["num"];
		$double=0;
		$Gnumber=0;
		$total=0;
		for($a=1;$a<=$num;$a++) { 
			if($a%2==0){
				$double=$double+$a;
			}else{
				$Gnumber=$Gnumber+$a;
			}
			$total = $total+$a;
		}


		echo "<div class='title'>運算結果</div>";
		echo "<table border='1' cellspacing='0' width='500'>
		<tr>
			<td>總和</td>
			<td>$total</td>
		</tr>
		<tr>
			<td>偶數和</td>
			<td>$double</td>
		</tr>
		<tr>
			<td>奇數和</td>
			<td>$Gnumber</td>
		</tr>
		</table>"; 
	 ?>
</body>
</html>