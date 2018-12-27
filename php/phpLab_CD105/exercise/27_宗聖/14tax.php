<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>14tax</title>
	<style type="text/css">
		p{
			text-align: center;
			font-size: 20px;
		}
	</style>

</head>
<body>
	<?php 
		$level;
		$income=$_REQUEST["income"];
		$rate;
		$taxsum;
		$returnTax;

		if ($income <= 500000 && $income > 0) {
			$level = 1;
			$rate = 0.05;
			$returnTax = 0;
			$taxsum = $income * $rate - $returnTax;
		}elseif ($income <= 1130000  && $income > 500000) {
			$level = 2;
			$rate = 0.12;
			$returnTax = 35000;
			$taxsum = $income * $rate - $returnTax;
		}elseif ($income <= 2260000  && $income > 1130000) {
			$level = 3;
			$rate = 0.20;
			$returnTax = 125400;
			$taxsum = $income * $rate - $returnTax;
		}elseif ($income <= 4230000  && $income > 2260000) {
			$level = 4;
			$rate = 0.30;
			$returnTax = 351400;
			$taxsum = $income * $rate - $returnTax;
		}else{
			$level = 5;
			$rate = 0.40;
			$returnTax = 774400;
			$taxsum = $income * $rate - $returnTax;
		}

		echo "<p>您的收入{$income}<br>稅率級別是{$level}<br>稅率為{$rate}<br>";
		echo "扣除累進稅差{$returnTax}<br><b>所得稅計算為{$taxsum}</b><br></p>";

	 ?>
</body>
</html>