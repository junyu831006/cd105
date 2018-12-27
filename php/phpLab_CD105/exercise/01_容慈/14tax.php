<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<style type="text/css" media="screen">
	body{
		text-align: center;
		color: lightslategray;
	}	
	</style>
	
</head>
<body>
	<h2>繳錢拉～～！</h2>
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
	echo "您應繳稅額為{$tax}元，感謝您對國家的貢獻！<br>";

 ?>

</body>
</html>