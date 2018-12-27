<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>14tax_php</title>
</head>
<body>
	<?php 
	$income = $_GET["income"];
	$tax = 0;

	if($income >= 4230001){
		$tax = ($income * 0.4) - 774400;
	}elseif ($income >= 2260001){
		$tax = ($income * 0.3) - 351400;
	}elseif ($income >= 1130001){
		$tax = ($income * 0.2) - 125400;
	}elseif ($income >= 500001){
		$tax = ($income * 0.12) - 3500;
	}else{
		$tax = ($income * 0.5);
	}

	echo "您的綜合所得稅為：", $tax, "元！";


	 ?>
</body>
</html>