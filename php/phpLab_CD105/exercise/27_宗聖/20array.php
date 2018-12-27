<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>20array</title>
	<style type="text/css">
		body{
			text-align: center;
			font-size: 20px;
		}
	</style>
</head>
<body>
	<p>
		<?php 
			$arrNumber = array();
			$sum=0;
			$maxNum=0;
			$minNum=100;
			for ($i=1; $i <= 10 ; $i++) { 
				$Number = mt_rand(1,100);
				$arrNumber[]=$Number;
			}
			echo "1-100隨機產生10個數之陣列值<br>";
			for ($i=0; $i <=9 ; $i++) { 
				echo "{$arrNumber[$i]}<br>";
			}
			echo "總和值<br><br>";
			for ($i=0; $i <=9 ; $i++) { 
				$sum +=$arrNumber[$i];	
			}
			echo "{$sum}<br><br>";
			echo "最大值<br><br>";
			for ($i=0; $i <=9 ; $i++) { 
				if ( $arrNumber[$i] > $maxNum) {
					$maxNum = $arrNumber[$i];
				};	
			}
			echo "{$maxNum}<br><br>";
			echo "最小值<br><br>";
			for ($i=0; $i <=9 ; $i++) { 
				if ( $arrNumber[$i] < $minNum) {
					$minNum = $arrNumber[$i];
				};	
			}
			echo "{$minNum}<br><br>";

		 ?>

	</p>
</body>
</html>