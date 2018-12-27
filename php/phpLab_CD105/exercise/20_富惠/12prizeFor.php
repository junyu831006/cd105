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
	for($i=0;$i<=10;$i++){
		$rand = mt_rand(0,10);
		$money = $rand * 100;
		$total =$total+$money;
		echo $rand, 
		"本次彩金金額為 {$money}元 <br>";
	}

	echo "彩金總數為 {$total}元";



   ?>
</body>
</html>