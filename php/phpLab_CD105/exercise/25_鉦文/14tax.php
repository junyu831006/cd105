<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title></title>
</head>
<body>
	<?php 
		$grade;
		$income=$_REQUEST["income"];		
		$sum;
		$overadd;

		if($income > 4230000 ){
			$grade = 5;
			$rate = 0.40;
			$overadd = 774400;
			$sum = $income * $rate - $overadd;
		}elseif ($income > 2260000) {
			$grade = 4;
			$rate = 0.30;
			$overadd = 351400;
			$sum = $income * $rate - $overadd;
		}elseif ($income > 1130000) {
			$grade = 3;
			$rate = 0.20;
			$overadd = 125400;
			$sum = $income * $rate - $overadd;
		}elseif ($income > 500000) {
			$grade = 2;
			$rate = 0.12;
			$overadd = 35000;
			$sum = $income * $rate - $overadd;
		}elseif ($income >= 0) {
			$grade = 1;
			$rate = 0.05;
			$overadd = 0;
			$sum = $income * $rate - $overadd;
		}
 		
		echo "<p>您的收入：{$income}<br><br>稅率級別：{$grade}<br>稅率：{$rate}<br>";
		echo "扣除累進稅差：{$overadd}<br><br>所得稅：{$sum}</p>";

	 ?>
</body>
</html>