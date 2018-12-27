<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>

	<?php  

		for ($i=1;$i<=10;$i++){
			
			$total=0; //每一列歸零再加
			for ($j=1;$j<=$i;$j++){

				if ($j<$i){
					echo $j."+";
				}
				else{
					echo $j."=";  //最後一個數值後面才接=
				}

				$total+=$j;  //把每一row的j相加
			}
			
			echo $total."<br>";
		}


	?>
	
</body>
</html>