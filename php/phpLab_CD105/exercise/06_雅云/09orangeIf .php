<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>09 SWITCH IF</title>
	<style type="text/css">
		
		table,td{
			border: 1px solid black;
			border-collapse: collapse;
			margin: auto;
		}
		td{
			padding: 20px;
		}
		
	</style>
</head>
<body>
	<?php  

			$level=$_GET["level"];
			$number=$_GET["number"];

			switch ($level) {
				case '1':
					if($number<40){
						$price=30;
					}
					elseif ($number>100) {
						$price=20;
					}
					else{
						$price=25;
					}
					break;
				case '2':
					if($number<40){
						$price=25;
					}
					elseif ($number>100) {
						$price=15;
					}
					else{
						$price=20;
					}
					break;
				case '3':
					if($number<40){
						$price=20;
					}
					elseif ($number>100) {
						$price=10;
					}
					else{
						$price=15;
					}
					break;
				
				
			}

			$total=$number*$price;
		?>
	<table>
		
		<tr>
			<td>購買等級</td>
			<td><?php echo $level; ?></td>
		</tr>
		<tr>
			<td>公斤數</td>
			<td><?php echo $number; ?></td>
		</tr>
		<tr>
			<td>小計</td>
			<td><?php echo $total; ?></td>
		</tr>

	</table>
</body>
</html>