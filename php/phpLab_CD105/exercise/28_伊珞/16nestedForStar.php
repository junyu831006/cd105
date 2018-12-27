<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>16nestedForStar_php</title>
</head>
<body>

	<?php
	$i = 0;
	$j = 0;

	for($i = 0; $i < 12; $i++){
		if($i < 6){
			for($j = 0; $j <= $i; $j++ ){
			echo "*";
		}
		echo "<br>";
		}else{
			for($k = 11; $k > $i; $k-- ){
			echo "*";
		}
		echo "<br>";
	}	
	}
	 ?>

</body>
</html>