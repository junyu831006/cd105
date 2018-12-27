<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	
@@@@@@@@@作業十三　：(迴圈練習)  <br>
13prize.php <br>
摸彩金 : 有11顆彩球, 彩球面額為0-10之間, 若摸到的彩球不為0,則可繼續摸彩,若摸到的彩球為0,則停止摸彩,並計算其摸彩次數及彩金總金額<br>(單位:佰元) <br><br><br>

<?php  
	$j=1;$sum=0;
	for($i=1;$i<=10;$i){
			$r =rand(0,10);
				if($r!=0){	
					$sum += $r;
					$finalSum=$sum*100;	
					$nr=$r*100;
					echo "第{$j}次: ",$r," 號，累加{$nr}元<br>";
					echo "當前總額小計".$finalSum."元<br><br>";			
					$j++;			
					}		
				else{
					$sum += $r;
					$finalSum=$sum*100;	
					echo "第{$j}次: ",$r," 號<br>";
					echo "當前總額小計".$finalSum."元<br><br>";
					echo "彩球為0 遊戲停止!!<br><br>";
					break;
				}
		}
			
		
		echo "<hr style='width:100px;float:left;'><br>";
		echo "共累積{$j}次,彩金總金額".$finalSum."元";

?>


</body>
</html>