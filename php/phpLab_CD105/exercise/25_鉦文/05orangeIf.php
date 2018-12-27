<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>07orangeIf.php</title>
</head>
<body>

	<!-- @@@@@@@@@作業五　：（運算式練習）<br>
05orange.htm, 05orange.php<br>
寫程式可輸入橘子一斤的單價, 及購買的斤數,並算出小計為何?<br>
05orange.htm,05orange.php<br> -->

	 <?php 

	 	$price = $_REQUEST["price"];
	 	$num = $_REQUEST["num"];
	 	$sum = $price*$num;	 	
	 	$discount=1;

	 	$wordA = 0;
	 	$wordB = "";

	 	// 計算	 
	 	$finalsum = $sum*$discount;

	 	// 回答詞
	 	switch ($discount) {
	 		case 1:
	 		$wordA = "";
	 		$wordB = "不打折";
	 		break;	 		

	 	}

	 
	 echo "
	<div style='width: 500px;margin: auto;'>	
	<h3 style='text-align: center;'>您的消費資料為</h3>
	 <table border='1' style='text-align: center;'>
	 	<tr><td  style='width: 500px'>單價</td><td style='width: 500px'>{$price}</td></tr>	
	 	<tr><td>數量</td><td>{$num}</td></tr>	 
	 	<tr><td>小計</td><td>{$finalsum}</td></tr>	  	
	 </table>
	 <br>
	 你買了{$num}顆橘子，每顆{$price}元，消費金額為{$sum}元<br> 
	 		{$wordA}{$wordB}，小計為{$finalsum}元
	 </div>";

	 	?>

 

</body>
</html>


 