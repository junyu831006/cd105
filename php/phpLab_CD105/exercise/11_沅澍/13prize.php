<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>13prize</title>
</head>
<body>
	 <Input Type="Button" Value="再抽一次" onClick="window.location.reload();">
	 <br>
	<?php 

	$prize=1;
	$total=0;
	$times=0;


	while($prize!=0){
		$times++;
		$prize = rand(0,10);
		echo "第{$times}次摸彩 摸到的獎金是{$prize}00元<br>";
			$total += $prize ;
	}

	echo "總共抽了{$times}次 共獲得{$total}00元<br>";
	 ?>
	 
</body>
</html>