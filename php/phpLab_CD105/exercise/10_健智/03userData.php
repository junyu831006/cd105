<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>

	<style type="text/css">
		h2{
			text-align: center;
			color: #ff0080;
		}
		table{
			margin: auto;
		}
		th{
			background-color: pink;
		}
		.title{
			width: 50px;
		}

	</style>
</head>
<body>
	<?php  
	$name ="小丸子";
	$age ="是秘密呦...";
	$add ="漫畫走廊...";
	?>

<!-- 	<h2>個人小檔案</h2>
	<table  border='1' width='250'>
		<tr bgcolor='pink'>
			<th>姓名:</th>
			<th>年齡:</th>
			<th>地址:</th>
		</tr>
		<tr>
			<td><?php
			echo $name ?></td>
			<td><?php 
			echo $age ?></td>
			<td><?php
			echo $add ?></td>
		</tr>
   </table> -->
		
	<h2>個人小檔案</h2>
	<?php  
	$name ="小丸子";
	$age ="是秘密呦...";
	$add ="漫畫走廊...";
	?>
	
	
	 "<table border='1' width='150px'>
	<tr>
		<th class="title">姓名 :</th>
		<td><?php echo $name ?></td>
	</tr>
	<tr>
		<th class="title">年齡 :</th>
		<td><?php echo $age ?></td>
	</tr>
	<tr>
		<th class="title">地址 :</th>
		<td><?php echo $add ?></td>
	</tr>
   </table>";
  

	
	
</body>
</html>