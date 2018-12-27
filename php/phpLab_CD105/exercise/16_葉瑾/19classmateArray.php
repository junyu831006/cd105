<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<style type="text/css">
		table,td,th{
			margin: auto;
			border: 1px solid black;
			border-collapse: collapse;
			padding: 10px;
		}
		
	</style>
</head>
<body>
	<table>
		
		<tr>
			<th>學號</th>
			<th>姓名</th>
			<th>電話</th>
			<th>地址</th>
		</tr>
	<?php 
	$student = array(array('學號'=>'94951001', '姓名'=>'黃一丁', '電話'=>'0911000333', '地址'=>'中壢市中大路1號'),
				array('學號'=>'94951002', '姓名'=>'劉二毛', '電話'=>'0922999887', '地址'=>'高雄市中山路2號'),
				array('學號'=>'94951003', '姓名'=>'張大化', '電話'=>'0933555779', '地址'=>'台北市師大路3號'));

	foreach ($student as $data) {
		echo "<tr>";

		echo "<td>".$data['學號']."</td>";
		echo "<td>".$data['姓名']."</td>";
		echo "<td>".$data['電話']."</td>";
		echo "<td>".$data['地址']."</td>";
	}

	 ?>
	 </table>
</body>
</html>