<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>13</title>
</head>
<body>
	<?php  

	$total=0;
	$count=0;
	$i=0;

	//讓while能一直跑，直到遇到0跳出迴圈
	while(true){
		$n=rand(0,10);
		echo $n."<br>";
		$total+=$n;
		$count++;
		if ($n==0){
			break;
		}
	}



	$total*=100;
	echo "總共抽 $count 次 <br>";
	echo "總獎金為 $total";
	?>
</body>
</html>