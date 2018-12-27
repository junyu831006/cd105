<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<!-- 摸彩金 : 有11顆彩球, 彩球面額為0-10之間, 若摸到的彩球不為0,則可繼續摸彩,若摸到的彩球為0,則停止摸彩,並計算其摸彩次數及彩金總金額(單位:佰元)  -->
	
	<?php 
	$sum= 0;
	$time= 0;
	do {
		$time++;
		$rand= mt_rand(0,10);
		$prize=$rand*100;
		$sum+=$prize;
	} while ( $rand!=0);
		
	echo "總摸彩次數為{$time}次<br>";
	echo "您贏得的總金額為{$sum}元，恭喜您!<br>";
	?>
</body>
</html>