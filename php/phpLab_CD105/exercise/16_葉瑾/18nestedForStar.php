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
<!--
		印出
		1=1
		1+2=3
		1+2+3=6
		..
		1+2+3...+10=55
		-->
	<?php
    
    for($i=1 ; $i<=10 ; $i++){ 
    $total = 0;     
        for($j=1; $j<=$i ; $j++ ){
            if($j < $i){
                echo $j."+";               
            }else{
                echo $j."=";
            }  
            $total += $j;       
        }
            
            echo $total;
            echo "<br>";
        }
        
    ?>
</body>
</html>