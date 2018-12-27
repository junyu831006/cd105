<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<!-- 摸彩金 : 有11顆彩球, 彩球面額為0-10之間, 可以摸彩10次, 印出其每次的摸彩金額及彩金總金額(單位:佰元)
 -->
	<?php 
	$prize=0;
	$sum=0;
	for ($i=1; $i <11 ; $i++) { 
		$rand=rand(0,10);
		$prize=$rand*100;
		$sum+=$prize;
		echo "第{$i} 次摸到的金額為{$prize}元，恭喜您!<br>";
	}
	// 用i才會照順序排
	echo "您贏得的總金額為{$sum}元，恭喜您!<br>";
	 ?>
</body>
</html>