<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>10forSum_php</title>
</head>
<body>
	<?php

	$num = $_GET["num"];

	$i = 1;
	$total = 0;
	while ( $i <= $num ){
		$total += $i;
		$i++;
	}
	echo "1到{$num}的總和：", $total, "<br>";
	?>


		<?php
	$num = $_GET["num"];
	$i = 1;
	$total_odd = 0;
	while ( $i <= $num ){
		$total_odd += $i;
		$i += 2;
	}
	echo "1到{$num}的奇數總和：", $total_odd, "<br>";
	?>



	<?php
	$num = $_GET["num"];
	$i = 2;
	$total_even = 0;
	while ( $i <= $num ){
		$total_even += $i;
		$i += 2;
	}
	echo "1到{$num}的偶數總和：", $total_even, "<br>";
	?>


</body>
</html>