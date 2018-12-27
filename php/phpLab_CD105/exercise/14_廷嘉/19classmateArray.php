<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<style type="text/css">
		th{
			background-color: #ea0;
			font-weight: bold;
		}
		td {
			width: 150px;
			height: 25px;
			text-align: center;
		}
	</style>
</head>
<body>
	<?php  
		$no = array("94951001","94951002","94951003");
		$name = array("黃一丁","劉二毛","張大化");
		$tel = array("0911000333","0922999887","0933555779");
		$addr = array("中壢市中大路1號","高雄市中山路2號","台北市師大路3號");

		echo "<table border='1' align = 'center' cellspacing = '0'>";
		echo "<tr>
		<th>學號</th>
		<th>姓名</th>
		<th>電話</th>
		<th>地址</th>
		</tr>";
		$len = count($no);
		
		for($i=0 ; $i < $len ; $i++) {
			echo "<tr><td>$no[$i]</td><td>$name[$i]</td><td>$tel[$i]</td><td>$addr[$i]</td></tr>";

		}

	?>
</body>
</html>