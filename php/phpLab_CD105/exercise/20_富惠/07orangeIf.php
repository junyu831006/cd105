<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<style type="text/css">

		td{
			text-align: center;
		}

	</style>
</head>
<body>
	<form method="get" action>
	<table border="1" width="450px">
		<tr>
			<td>單價</td>
			<td>
			<?php 
			echo $_GET["price"];
			?>
			</td>
		</tr>	
		<tr>
			<td>數量</td>
			<td><?php 
			echo $_GET["quantity"];
			?></td>
		</tr>
		<tr>
			<td>小計</td>
			<td><?php 
			$amt=$_GET["price"]*$_GET["quantity"];
			$y=0.9;
			$z=0.7;
			if($amt>1000){
				$amt=$amt*$z;
			}
			elseif($amt>500){
				$amt=$amt*$y;
			}
			
			echo $amt;

			?>
			</td>
		</tr>

	</table>	

	</form>
	
</body>
</html>