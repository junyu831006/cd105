<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<?php  
		$money = $_POST["money"];
		settype($money , "integer");
		echo "您此次所得淨額： $money 元<br>";
		$a = 500000;
		$b = 1130000;
		$c = 2260000;
		$d = 4230000;
		if($money>$d){
			$tax = $money*0.4 - 774400;
		}elseif ($money>$c) {
			$tax = $money*0.3 -351400;
		}elseif ($money>$b) {
			$tax = $money*0.2-125400;
		}elseif ($money>$a) {
			$tax = $money*0.12-35000;
		}else{
			$tax = $money*0.05;
		}
		echo "應繳稅額： $tax 元";

	?>
</body>
</html>