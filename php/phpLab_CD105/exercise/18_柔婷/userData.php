<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<style type="text/css">
		th{
			background-color: #EAD2D6;
		}
	</style>
</head>
<body>
	<?php 
		$name ="北飄飄";
		$age = "28";
		$add ="母星的某個角落";

	 ?>
	<h2>About Me</h2>
	<table border="1" width="300">
	<tr>
		<th>姓名</th>
		<td><?php 
		echo "$name";
		 ?>    </td>	
	</tr>


	<tr>
		<th>年齡</th>
		<td><?php echo "$age";  ?>
		     </td>	
	</tr>


	<tr>
		<th>地址</th>
		<td> <?php echo "$add";  ?>    </td>	
	</tr>

	  </table>
	
</body>
</html> 