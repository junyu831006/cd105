<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	
	<table border="1">
		<tr>
			<?php
				$student1=array('94951001', '黃一丁', '0911000333', '中壢市中大路1號');
				$student2=array('94951002', '劉二毛', '0922999887', '高雄市中山路2號');
				$student3=array('94951003', '張大化', '0933555779', '台北市師大路3號');
				$length=count($student1);
				for ($i=0; $i < $length; $i++) { 
					echo "<td>{$student1[$i]}</td>";
				}
				echo "</tr><tr>";
				$length=count($student2);
				for ($i=0; $i < $length; $i++) { 
					echo "<td>{$student2[$i]}</td>";
				}
				echo "</tr><tr>";
				$length=count($student3);
				for ($i=0; $i < $length; $i++) { 
					echo "<td>{$student3[$i]}</td>";
				}
				echo "</tr>";
			?>
	</table>
	
</body>
</html>