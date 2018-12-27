<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>07orangeIf.php</title>
</head>
<body>

	<!-- @@@@@@@@@作業七　：(if練習) 
	寫程式可輸入橘子一斤的單價, 及購買的斤數,並算出小計為何,
	若消費金額超過500元, 則打九折,
	若消費金額超過1000元, 則打七折
	07orangeIf.htm , 07orangeIf.php-->

	 <?php 

	 	$price = $_REQUEST["price"];
	 	$num = $_REQUEST["num"];
	 	$sum = $price*$num;	 	
	 	$discount = 0;

	 	$wordA = 0;
	 	$wordB = "";

	 	// 計算
	 	if($sum>1000){
	 		$discount=0.7;	 		
	 	}
	 	elseif($sum>500){
	 		$discount=0.9;	 		
	 	}
	 	else {
	 		$discount=1;
	 		$wordA = 0;
	 	}
	 	$finalsum = $sum*$discount;

	 	// 回答詞
	 	switch ($discount) {
	 		case 0.9:
	 		$wordA = "超過500元";
	 		$wordB = "打九折";
	 			break;
	 		case 0.7:
	 		$wordA = "超過1000元";
	 		$wordB = "打七折";
	 			break;
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


 