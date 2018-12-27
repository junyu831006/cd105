<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>19classmateArray_php</title>
	<style type="text/css">
		table{
			border: solid 1px #999;
		}
		td{
			border: solid 1px #ccc;
		}
		thead{
			background-color: #fec;
		}
	</style>
</head>
<body>
	<h2>好媒媒班級通訊錄</h2>
	<table>
		<thead>
			<tr>
				<td>學號</td>
				<td>姓名</td>
				<td>電話</td>
				<td>地址</td>
			</tr>
		</thead>
		<tbody>
			<tr>
				<?php 
				$numb = array(94951001,94951002,94951003);
				$name = array("黃一丁","劉二毛","張大化");
				$phon = array("0911000333","0922999883","0933555779");
				$adrs = array("中壢市中大路1號","高雄市中山路2號","台北市師大路3號");
				$all = count($numb);

				for($i = 0; $i < $all; $i++){
					echo "<tr><td>", $numb[$i], "</td><td>", $name[$i], "</td><td>", $phon[$i], "</td><td>", $adrs[$i], "</td></tr>";
				}


				 ?>
			</td>
		</tbody>
	</table>
</body>
</html>