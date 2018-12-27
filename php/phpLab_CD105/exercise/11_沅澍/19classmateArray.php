<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>19classmateArray</title>
	<style type="text/css">
		table{
			width: 480px;
			text-align: center;
		}

		table,td{
			border: solid 1px;
			border-spacing: 0;
		}
		.a{
			border:0px;
		}
		

	</style>
</head>
<body>
			<table class="a">
			<tr><td>好媒媒體班級通訊錄</td></tr>
			</table>
<?php 
	$number= array("94951001","94951002","94951003");
	$name= array("黃一丁","劉二毛","張大化");
	$phone= array("0911000333","0922999887","0933555779");
	$site= array("中壢市中大路1號","高雄市中山路2號","台北市師大路3號");

	echo "<table><tr>
			<td>學號</td>
			<td>姓名</td>
			<td>電話</td>
			<td>地址</td>
		 </tr>";
	for ($i=0; $i<3 ; $i++) { 
		echo "<tr><td>$number[$i]</td>";
		echo "<td>$name[$i]</td>";
		echo "<td>$phone[$i]</td>";
		echo "<td>$site[$i]</td></tr>";

	}


	echo "</table>";


 ?>
	
</body>
</html>