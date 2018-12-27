<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>13prize.php</title>
	<style type="text/css">
		body{
			text-align: center;
			font-size: 20px;
		}
	</style>
</head>
<body>
	<p><strong> 1.只能抽10次 抽到0會停</strong><br>	
		<?php  //只能抽10次
		$sum=0;

		for ($i=1; $i <=10 ; $i++) { 	
			$ball = mt_rand(0,10);
			if ($ball>0) {
				echo "第{$i}次彩球號碼：{$ball}<br>";				
				$money=$ball*100;
				echo "彩金：{$money}<br>";
				$sum += $money;
			}

			elseif($ball == 0){
				echo "<br>第{$i}次<br>抽中{$ball}遊戲結束<br>";
				$i=10;
			}
				
		}
		echo "累計總金額：{$sum}<br>";
	 ?></p>
	<hr>
	<p><strong>2.無限抽 抽到0會停</strong><br>	
		<?php
		$sum=0;
		$money=0;
		while (($ball = mt_rand(0,10)) != 0 ) {
			$money=$ball*100;
			$sum+=$money;
			echo "獲得彩金：{$money}<br>";
		}
		echo "<br>總彩金：{$sum}元";


		 ?>
	</p>

	
</body>
</html>