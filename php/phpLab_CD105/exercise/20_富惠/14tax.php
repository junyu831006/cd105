<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<?php 
		$price=$_GET["price"];
		if($price<500001){
			$total=$price*0.05;
		}
		elseif ($price<1130001){
			$total=$price*0.12-35000;
		}
		elseif ($price<2260001){
			$total=$price*0.2-125400;
		}
		elseif ($price<4230001){
			$total=$price*0.3-351400;
		}
		else ($price>=4230001){
			$total=$price*0.4-774400;
		}
		echo $total;


	 ?>


</body>
</html>