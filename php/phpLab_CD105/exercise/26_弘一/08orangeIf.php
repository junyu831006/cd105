<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	

<?php
$level = $_REQUEST["level"];
$Kilogram = $_REQUEST["Kilogram"];
$price = 0;
$apperKilo = '';

// echo $level,'<br>';
// echo $Kilogram,'<br>';

	//等級一對價關係
	if($level == 1 &&  $Kilogram > 100){
		$price =20 *$Kilogram;
		$apperKilo = '由於已超過100公斤，所以每公斤算你20元';
		// echo $price;
	}elseif($level ==1 && $Kilogram > 40 ){
		$price =25 *$Kilogram;
		$apperKilo = '超過40公斤，每公斤算你25元';
		// echo $price;
	}elseif($level ==1 && $Kilogram <= 40 ){
		$price =30 *$Kilogram;
		$apperKilo = '40公斤以內，每公斤為30元';
		// echo $price;
	}

	//等級二對價關係
	if($level == 2 &&  $Kilogram > 100){
		$price =15 *$Kilogram;
		$apperKilo = '由於已超過100公斤，所以每公斤算你15元';
		// echo $apperKilo;
	}elseif($level ==2 && $Kilogram > 40 ){
		$price =20 *$Kilogram;
		$apperKilo = '超過40公斤，每公斤算你20元';
		// echo $price;
	}elseif($level ==2 && $Kilogram <= 40 ){
		$price =25 *$Kilogram;
		$apperKilo = '40公斤以內，每公斤為25元';
		// echo $price;
	}
	
	//等級三對價關係
	if($level == 3 &&  $Kilogram > 100){
		$price =10 *$Kilogram;
		$apperKilo = '由於已超過100公斤，所以每公斤算你10元';
		// echo $price;
	}elseif($level == 3 && $Kilogram > 40 ){
		$price =15 *$Kilogram;
		$apperKilo = '超過40公斤，每公斤算你15元';
		// echo $price;
	}elseif($level == 3 && $Kilogram <= 40 ){
		$price =20 *$Kilogram;
		$apperKilo = '40公斤以內，每公斤為30元';
		// echo $price;
	}
?>
	<table>
		<tr>
			<td>您所選擇的是等級 <strong><?php echo $level ?></strong></td>
		</tr>
		<tr>
			<td><?php echo $apperKilo; ?></td>
		</tr>
			<td><h2>總計:<strong><?php echo $price; ?></strong></h2></td>
		</tr>
	</table>

</body>
</html>
