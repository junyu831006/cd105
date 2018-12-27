<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>19array</title>
	<style type="text/css">
		table, th, td {
    border: 1px solid black;
    border-collapse: collapse;
    text-align: center;
    }
	</style>
</head>
<body>
	<table>
		<tr>
			<td>學號</td>
			<td>姓名</td>
			<td>電話</td>
			<td>地址</td>
		</tr>
	
	<?php 
		$number=array("94951001","94951002","94951003");
		$name=array("黃一丁","劉二毛","張大化");
		$phone=array("0911000333","0922999887","0933555779");
		$add=array("中壢市中大路1號","高雄市中山路2號","台北市師大路3號");
		for($i=0;$i<3;$i++){
			echo "<tr><td>$number[$i]</td>";
			echo "<td>$name[$i]</td>";
			echo "<td>$phone[$i]</td>";
			echo "<td>$add[$i]</td></tr>";

		}

	?>

	</table>	
</body>
</html>