<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<?php  

	for ($i=1;$i<=11;$i++){

		

		if ($i<=6){
			for ($j=1;$j<=$i;$j++){    
				echo "*";
			}
		}
		else{
			for ($j=1;$j<=12-$i;$j++){     //從第七排開始 星星數+排數=12
				echo "*";
			}
		}
		echo "<br>";
	}


	?>
</body>
</html>