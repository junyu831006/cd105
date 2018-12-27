<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<style type="text/css">
		
		h2{
			text-align: center;
		}
		div{
			text-align: center;
		}

	</style>
</head>
<body>
	<h2>您的消費為</h2>
<?php
	
	$memPsw=$_GET["name"]*$_GET["memID"];

	

	?>
	

	<table border="1" width="600" align="center">
			
	<tr>
		<th>單價</th>
		<td>
			<?php echo $_GET["name"],"<br>"; ?>
		</td>
	</tr>

	<tr>
		<th>數量</th>
		<td>
			<?php echo $_GET["memID"],"<br>"; ?>
		</td>
	</tr>
		
	<tr>
		<th>小計</th>
		<td>
			<?php echo $memPsw,"<br>"; ?>
		</td>
	</tr>



</table>
		
</body>
</html>