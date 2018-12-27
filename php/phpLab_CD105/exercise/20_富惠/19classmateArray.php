<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<?php

		$a = array("94951001","黃一丁","0911111333","中壢市中大路1號");
		$b = array("94951002","劉二毛","0922999887","高雄市中山路2號");
		$c = array("94951003","張大化","0933555779","台北市師大路3號");
			
			echo"<table border=1>";
				echo "<tr>";
				$length=count($a);
				for ($i=0; $i < $length; $i++) { 
					echo "<td>{$a[$i]}</td>";
				}
				echo "</tr>";

				echo"<tr>";
				$length=count($b);
				for ($i=0; $i < $length; $i++) { 
					echo "<td>{$b[$i]}</td>";
				}
				echo"</tr>";
				echo "<tr>";
				$length=count($c);
				for ($i=0; $i < $length; $i++) { 
					echo "<td>{$c[$i]}</td>";
				}
				echo "</tr>";
			echo"</table>";
	 ?>
				


	
</body>
</html>