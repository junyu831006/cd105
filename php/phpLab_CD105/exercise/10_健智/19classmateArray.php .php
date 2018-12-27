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
		th{
			background-color: #fa0;
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
		$number=array(94951001,94951002,94951003);
		$name=array("黃一丁","劉二毛","張大化");
		$tel=array("0911000333","0922999887","0933555779");
		$add=array("中壢市中大路1號","高雄市中山路2號","台北市師大路3號");
		
		$n=count($number);
		
		for ($i=0;$i<$n;$i++) { 
			echo "<tr>";

			echo "<td>",$number[$i],"</td>";
			echo "<td>",$name[$i],"</td>";
			echo "<td>",$tel[$i],"</td>";
			echo "<td>",$add[$i],"</td>";

			echo "</tr>";
		}
		?>


	</table>
</body>
</html>