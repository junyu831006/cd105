<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>19classmateArray</title>
	<style type="text/css">
		body{
			text-align: center;
			font-size: 20px;
		}
		table{
			display: inline-block;
			border: 1px solid #ccc;
		}
		td{
			width: 150px;
		}
	</style>
</head>
<body>
		<?php  
			$arrNumber = array('94951001','94951002', '94951003');
			$arrName = array('黃一毛','劉二毛','張大化');
			$arrphone= array('0911000333','0922999887', '0933555779');
			$arrAddress= array('中壢市中大路1號','高雄市中山路2號', '台北市師大路3號');
			$len = count($arrNumber);

			//echo "$arrNumber[0] $arrName[0] $arrphone[0]";
			echo "<table>";
				echo "<tr><td><b>學號</b></td><td><b>姓名</b></td><td><b>電話</b></td><td><b>地址</b></td></tr>";
				for ($i=0; $i <$len ; $i++) { 
					echo "<tr><td>$arrNumber[$i]</td><td>$arrName[$i]</td><td>$arrphone[$i]</td><td>$arrAddress[$i]</td></tr>";
				}
			echo "</table>";
		?>

	
</body>
</html>