<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>12prizeFor</title>
</head>
<body>
	<?php 

	$prize=0;
	$total=0;

	for ($i=1; $i<11 ; $i++) { 
		$prize=rand(0,10);
		echo "第$i 次摸到 $prize 00元<br>";
		$total += $prize ;
	}

	echo "您總共獲得 $total 00元<br>";



	 ?>
	 <Input Type="Button" Value="再抽一次" onClick="window.location.reload();">
	
</body>
</html>