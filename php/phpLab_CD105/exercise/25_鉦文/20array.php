<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>	</title>
</head>
<body>
	
<div style="text-align: center;margin: auto;">
	@@@@@@@@@作業二十　：(array練習)   
				20array.php
				隨機產生10個介於1-~100之間的數放在陣列中,<br> 
				印出這10個數, 總和 , 最小值 , 最大值<br>
				<br><br><br>
<?php 

				


			$arrNum = array();
			$sum=0;
			$maxNum=0;
			$minNum=100;
			for ($i=1; $i <= 10 ; $i++) { 
				$Num = rand(1,100);
				$arrNum[]=$Num;
			}

			echo "10個1~100之間隨機數陣列值<br><br> ";
			for ($i=0; $i <=9 ; $i++) { 
				echo "{$arrNum[$i]} ";
			}

			echo "<br><br>";
			echo "總和值: ";
			for ($i=0; $i <=9 ; $i++) { 
				$sum +=$arrNum[$i];	
			}
			echo "{$sum}"."&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp";


			echo "最大值: ";
			for ($i=0; $i <=9 ; $i++) { 
				if ( $arrNum[$i] > $maxNum) {
					$maxNum = $arrNum[$i];
				};	
			}
			echo "{$maxNum}"."&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp";


			echo "最小值: ";
			for ($i=0; $i <=9 ; $i++) { 
				if ( $arrNum[$i] < $minNum) {
					$minNum = $arrNum[$i];
				};	
			}
			echo "{$minNum}"."&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp";

		 ?>


		
</div>

</body>
</html>

