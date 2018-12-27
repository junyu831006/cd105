<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<style type="text/css">
		table{
			width: 500px;
			text-align: center;
			margin: auto;
			border: 1px solid black;
		}
		tr:first-child{
			background-color: #2cc;
		}
		td{
			border: 1px solid black;
		}
		h3{
			text-align: center;
		}
	</style>
</head>
<body>
	<h3>好媒媒體班級通訊錄</h3>
	<?php 
	$num= array("94951001","94951002","94951003");
	$name= array("黃一丁","劉二毛","張大化");
	$phone= array("0911000333","0922999887","0933555779");
	$add= array("中壢市中大路1號","高雄市中山路2號","台北市師大路3號");

	echo "<table><tr>
			<td>學號</td>
			<td>姓名</td>
			<td>電話</td>
			<td>地址</td>
		 </tr>";

	 for ($i=0; $i <3 ; $i++) { 
	 	echo "<tr><td>$num[$i]</td>";
	 	echo "<td>$name[$i]</td>";
	 	echo "<td>$phone[$i]</td>";
	 	echo "<td>$add[$i]</td></tr>";
	 
	 }
	 echo "</table>";
	 ?>
	 	
</body>
</html>