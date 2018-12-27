<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Examples</title>
<style type="text/css">
h2 {
	color:deeppink;
}	
td {
	width:80px;
	text-align:center;
}
</style>
</head>
<body>
<?php
echo "<table border='1' align='center' cellspacing='0'>";
for( $i=1; $i<=9; $i++){
	//echo "1 2 3 4 5 6 7 8 9";
	echo "<tr>";
	for( $j=1; $j<=9; $j++){
		echo "<td>$i*$j=",$i * $j, "</td>";
	}
	echo "</tr>";
} 
echo "</table>";  
?>      
</body>
</html>