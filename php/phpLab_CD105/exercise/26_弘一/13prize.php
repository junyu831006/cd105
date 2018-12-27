<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>13prize</title>
</head>
<body>
	
<?php
$i= 0;
$sum =0;
do{
	$rand_lotory = mt_rand(0,10);
	$i++;
	echo "第{$i}次抽到的是: {$rand_lotory}<br>";
	$sum+=$rand_lotory*100;
}
while ($rand_lotory!=0);

// 方法二- 用do while作法，去設定次數
// $i=0;
// $sum=0;
// do{
// 	$rand_lotory=mt_rand(0,10);
// 	$i++;
// 	echo $rand_lotory,"<br>";
// 	$sum+=$rand_lotory;
// 	if($rand_lotory==0){
// 		break;
// 	}
// }while($i<=10);
// 	echo $sum;


// 方法三- while作法，去設定次數
// $i=0;
// $sum = 0;
// while($i<=10){
// 	$rand_lotory = mt_rand(0,10);
// 	$i++;
// 	echo "第{$i}次抽到的是 : ",$rand_lotory,'<br>';
// 	$sum+= $rand_lotory*100;
// 	if($rand_lotory==0){
// 		break;
// 	}
// }
?>
	<h2>總共抽了<strong style="color: #f00"><?php echo  $i ?></strong>次</h2>
	<h1>金額總共為<strong style="color: #f00"><?php echo $sum ?></strong>元</h1>
</body>
</html>
