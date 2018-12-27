<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Examples</title>
<style type="text/css">
h2 {
	color:deeppink;
}	
</style>
</head>
<body>
<h2>continue</h2>	
<?php
$total=0;
for ($i=1; $i <= 10 ; $i++) {  //奇數才印,才加
	if( $i%2 == 0){
		continue;
	}
   	echo $i, "<br>";
   	$total += $i;
}
echo "total : $total";
?> 

<h2>break</h2>	
<?php
$total=0;
for ($i=1; $i <= 1000 ; $i++) {  //奇數才印,才加
   	$total += $i;
   	if( $total > 1000 ){
   		break;
   	}
}
echo "1+2+3+....$i = $total 大於1000";
?>       
</body>
</html>