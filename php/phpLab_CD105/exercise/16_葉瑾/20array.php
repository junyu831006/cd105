<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<style type="text/css">
		body{
			font-size: 30px;
		}
	</style>
</head>
<body>
<!-- 隨機產生10個介於1-~100之間的數放在陣列中, 
印出這10個數, 總和 , 最小值 , 最大值 -->

<?php  

	$arr;
	$total=0;

	for ($i=0;$i<10;$i++){
		$arr[$i]=rand(1,100);
		$total+=$arr[$i];
		echo $arr[$i]."<br>";




	}
	
	$min=$arr[0];
	$max=$arr[0];
	
	foreach($arr as $data){
		if ($data>$max){
			$max=$data;
		}
		elseif ($data<$min) {
			$min=$data;
		}
	}
		
		
	echo "max=".$max."<br>";
	echo "min=".$min."<br>";

	?>

	
</body>
</html>