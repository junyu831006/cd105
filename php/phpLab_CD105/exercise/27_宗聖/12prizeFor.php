<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>12prizeFor.php</title>
	<style type="text/css">
		body{
			text-align: center;
			font-size: 20px;
		}
	</style>
</head>
<body>
	<p><?php 
		$sum=0;
		for ($i=1; $i <=10 ; $i++) {  //100+...+1000
			$ball = mt_rand(0,10);
			echo "第{$i}次，彩球號碼：{$ball} <br>";				
			$money=$ball*100;
			echo "獲得彩金：{$money}<br>";
			$sum += $money;
		}
		echo "<br><br>總金額：{$sum}元";
	 ?>
	 </p>


</body>
</html>