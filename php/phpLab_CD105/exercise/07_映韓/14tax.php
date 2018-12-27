<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>tax</title>
	<style>
    table, th, td {
    border: 1px solid black;
    border-collapse: collapse;
    text-align: center;
    }
    </style>
</head>
<body>
	<?php 
		$total=0;
		$money=$_POST["money"];
		if ($money<=500000) {
			$total=$money*0.05;
		}
		elseif ($money<=1130000) {
			$total=$money*0.12-35000;
		}
		elseif ($money<=2260000) {
			$total=$money*0.2-125400;
		}
		elseif ($money<=4230000) {
			$total=$money*0.3-351400;
		}
		else{
			$total=$money*0.4-774400;
		}
	 ?>
<table>
	<tr>
		<td>應繳稅額</td>
		<td>
			<?php 
				echo "$total";
			 ?>
		</td>
	</tr>
</table>
</body>
</html>