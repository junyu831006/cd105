<?php
$total=0;
for($i=1;$i<=10;$i++){
	for ($j=1; $j < $i; $j++) { 
		echo $j,"+";
	}
	$total+=$j;
	echo $j,"=",$total;
	echo "<br>";
	
}
?>