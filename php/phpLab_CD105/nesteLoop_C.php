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
for( $i=1; $i<=9; $i++){
	echo "1 2 3 4 5 6 7 8 9";
	echo "<br>";
} 
?>  
<hr>

<?php
for( $i=1; $i<=9; $i++){
	// echo "1 2 3 4 5 6 7 8 9";
	for( $j=1; $j<=9; $j++){
		echo $j, "&nbsp;";
	}

	echo "<br>";
} 
?>  
<br>
<br>

<?php
// echo "<table border='1' align='center' cellspacing='0'>";
// for( $i=1; $i<=9; $i++){
// 	//echo "1 2 3 4 5 6 7 8 9";
// 	echo "<tr>";
// 	for( $j=1; $j<=9; $j++){
// 		echo "<td>$i*$j=",$i * $j, "</td>";
// 	}
// 	echo "</tr>";
// } 
// echo "</table>"; 

?> 
<br>
<br>
<br>

<?php
// echo "<table border='1' align='center' cellspacing='0'>";
// for( $i=1; $i<=9; $i++){
// 	//echo "1 2 3 4 5 6 7 8 9";
// 	echo "<tr>";
// 	$j=1;
// 	while( $j<=9){
// 		echo "<td>$i*$j=",$i * $j, "</td>";
// 		$j++; 
// 	}
// 	echo "</tr>";
// } 
// echo "</table>"; 

?>     
</body>
</html>