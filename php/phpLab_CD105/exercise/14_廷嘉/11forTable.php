<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>PHP作業四-接收頁</title>
	<style type="text/css">
		td{
			text-align: center;
		}
		.title{
			text-align: center;
			width: 500px;
		}
	</style>
</head>
<body>
	<?php
		echo "<div class='title'>印出資料如下表</div>";
		echo "<table border='1' cellspacing='0' width='500'>";
		for($i=1;$i<=10;$i++){
			if($i%2==1){
				$a=$i+1;
				echo "<tr><td>$i</td><td>$a</td></tr>";
			}
		}


		echo "</table>"; 
	 ?>
</body>
</html>