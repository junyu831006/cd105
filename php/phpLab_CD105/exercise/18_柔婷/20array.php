<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<?php 
		$input=10;
		$rand_min=1;
		$rand_max=100;

		$arr=array();
	$i=0;
	$total=0;
	$max=$rand_min-1; 
	$min=$rand_max+1; 

	while($i<$input){
	    $arr[$i]=mt_rand($rand_min,$rand_max);
	    $i++;
	}

	print_r($arr); echo"<br>";
	echo "總和<br>";
	for($i=0;$i<count($arr);$i++){
	    $total += $arr[$i];
	}
	echo "total= ",$total,"<br>";

	echo "最大值&最小值<br>";
	for($i=0;$i<count($arr);$i++){
	    if($arr[$i] > $max){
	        $max = $arr[$i];
	    }

	    if($arr[$i] < $min){
	        $min = $arr[$i];
	    }else{
	        continue;
	    }
	}
	echo "max:",$max,"     min:",$min,"<br><br>";

	

		 ?>

	
</body>
</html>