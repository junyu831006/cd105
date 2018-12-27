<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	
</body>
</html>
<?php
	echo "收到的數值為:",$_REQUEST["vaule"],"<br>";
	$vaule = $_REQUEST["vaule"];

 $total = 0;
 $Odd_total = 0;
 $Even_total = 0;
  for ($i=1 ; $i <= $vaule ; $i++) {
  		// 總和
   		$total +=$i;
   		// 偶數總和
 		if($i%2 == 0){
		$Even_total +=$i;
		}
		// 奇數總和
		if($i%2==1){
		$Odd_total +=$i;
		}
 // }
 }
 echo "從1+到{$_REQUEST["vaule"]}的總和為= ",$total,"<br>";
 echo "從1+到{$_REQUEST["vaule"]}的奇數總和= ",$Odd_total,"<br>";
 echo "從1+到{$_REQUEST["vaule"]}偶數總和=",$Even_total,"<br>";


// -----------------下面可以列印出1+2+3+4....的寫法-------------------
// echo "偶數總和為:";
//  for ($i=1 ; $i <= $vaule ; $i++) {
//  	if($i%2 == 0){
//  	echo $i;
//  	if($i<$vaule)
//  	echo "+";
//  	$Even_total +=$i;
//  	}
//  }
//  	echo "=",$Even_total,"<br>";

// echo "奇數總和為:";
//  for ($i=1 ; $i <= $vaule ; $i++) {
//  	if($i%2 == 1){
//  		echo $i;
//  			if($i<$vaule-1)
//  				echo "+";
//  		$Odd_total +=$i;
//  	}
//  }
//  	echo "=",$Odd_total,"<br>";

?>