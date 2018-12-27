<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<style type="text/css">
		.color{
			background-color: pink;
		}
	</style>
</head>
<body>
	<?php  	
		$name="小丸子";
		$age="是秘密呦..";
		$stress="漫畫走廊..";
	?>
		<table border=1>
		<tr>
			<td class="color">姓名</td>
			<td><?php echo $name ?></td>
		</tr>
		<tr >
			<td class="color">年齡</td>
			<td><?php echo $age ?></td>
		</tr>
		<tr>
			<td class="color">地址</td>
			<td><?php echo $stress ?></td>
		</tr>
		</table>



	

</body>
</html>