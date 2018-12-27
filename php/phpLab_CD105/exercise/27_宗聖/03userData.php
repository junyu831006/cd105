<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>03userData.php</title>
	<style type="text/css">
		.main-col{
			background-color: pink;
		}
		h2{
			font-size: 24px;
			color: pink;
			text-indent: 10px;
			margin-bottom: 0;
		}
		table,tr,td{
			border:2px solid #ddd; 
			font-size: 20px;
		}
	</style>
</head>
<body>
	<h2>個人小檔案</h2>
	<?php 	
		$name ="小丸子";
		$age ="是秘密...";
		$addr ="漫畫走廊...";
	 ?>
	<table>
		<tr>
			<td class="main-col">姓名</td>
			<td><?php echo $name ?></td>
		</tr>
		<tr>
			<td class="main-col">年齡</td>
			<td><?php echo $age ?></td>
		</tr>
		<tr>
			<td class="main-col">地址</td>
			<td><?php echo $addr ?></td>
		</tr>
	</table>

</body>
</html>