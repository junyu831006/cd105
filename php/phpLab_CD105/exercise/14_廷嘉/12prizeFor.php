<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<?php  
		$total=0;
		for($i=1;$i<=10;$i++){
			$num=mt_rand(0,10);
			echo "第 $i 次面額： $num <br>";
			$total = $total + $num; 
		}
		echo "$total<br>";
		$total = $total*100;
		echo "彩金總金額：$total 元";
	?>
</body>
</html>