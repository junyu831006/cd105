<?php 
	$n=10;

	for ($i=1; $i <=$n ; $i++) { 
		$total=0;
		for ($j=1; $j <=$i ; $j++) { 
			if ($j!=$i) {
				echo $j,"+";
			}else{
				echo $j;
			}
			$total+=$j;
		}
		echo "=",$total;
		echo "<br>";
	}























 ?>