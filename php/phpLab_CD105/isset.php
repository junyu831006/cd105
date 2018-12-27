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
<?php
$a = 10;
echo "有a嗎 ? ", isset( $a ) , "<br>"; //true
echo "有b嗎 ? ", isset( $b ) , "<br>";  //false
unset( $a );
echo "有a嗎 ? ", isset( $a ) , "<br>"; //true
echo "有b嗎 ? ", isset( $b ) , "<br>";  //false
?>      
</body>
</html>