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
echo "帳號: {$_GET["memId"]}<br>";
echo "英語文:  <br>";
if( isset($_GET["ability"])){
	foreach( $_GET["ability"] as $i => $data){
		echo "{$_GET["ability"][$i]}<br>"; 	
	}	
}else{
	echo "不知~<br>";
}

echo "專長:  <br>";
if( isset($_GET["specialty"])){
	foreach( $_GET["specialty"] as $i => $data){
		echo "{$_GET["specialty"][$i]}<br>"; 	
	}	
}else{
	echo "不知~<br>";
}

   
// 
?>      
</body>
</html>