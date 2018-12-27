<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<style type="text/css">
	table,tr,th,td{
		border: 1px solid;
	}
	td{
		width: 100px;
		text-align: center;
	}
	th{
		background-color: lightgreen;
	}
</style>
</head>

<body>
	<?php 
		$name="小丸子";
	 	$age="是秘密唷...";  
		$add="漫畫走廊";
	?>
	<table>
		<tr>
			<th>姓名:</th>
			<td>
				<?php 
					echo $name;
				?>					
			</td>
		</tr>
		<tr>
			<th>年齡:</th>
			<td>
				<?php 
					echo $age;
				?>
			</td>
		</tr>
		<tr>
			<th>地址:</th>
			<td>
				<?php 
					echo $add;
				?>
			</td>
		</tr>
	</table>	
</body>
</html>