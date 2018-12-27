<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
<?php
	$sum = 0;
	for($i=1 ; $i<=10 ; $i++){
		$rand_lotory =mt_rand(1,10);
		$price = $rand_lotory *100;
		echo "第{$i}次的摸彩金為{$price}元<br>";
		$sum+=$price;
	}
		// echo "摸彩總金額為{$sum}";
?>
<h2>摸彩總金額為: <?php echo $sum; ?></h2>
</body>
</html>
