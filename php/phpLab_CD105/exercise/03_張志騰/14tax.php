<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	
</head>
<body>
	<h2>應繳金額為</h2>
<?php 
	$income=$_GET["income"];
	$tax=0;
	if ($income <= 500000) {
		$tax = $income*0.05;
	}elseif ($income <= 1130000) {
		$tax = $income*0.12 - 35000;
	}elseif ($income <= 2260000) {
		$tax = $income*0.2 - 125400;
	}elseif ($income <= 4230000) {
		$tax = $income*0.3 - 351400;
	}elseif ($income > 4230001) {
		$tax = $income*0.4 - 774400;
	}
	echo "{$tax}元<br>";

 ?>

</body>
</html>