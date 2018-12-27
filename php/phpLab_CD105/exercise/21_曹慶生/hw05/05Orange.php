<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>05 Orange</title>
</head>
<body>
	<table border="8">
		  <tr>
		  	<td width="100px">單價</td><td  width="300px">
		  		<?php echo $_REQUEST["orangePrice"], "<br>";  ?>
		  	</td>
		  </tr>
		  <tr>
		  	<td width="100px">數量</td>
		  		<td  width="300px">
		  			<?php echo $_REQUEST["orangeAmount"],"<br>"; ?>
		  		</td>
		  	</tr>
		  	<tr>
		  	<td width="100px">小計</td>
		  		<td  width="300px">
		  			<?php 
		  			echo $_REQUEST["orangePrice"]* $_REQUEST["orangeAmount"]; 
		  			?>
		  		</td>
		  	</tr>
		</table>
</body>
</html>