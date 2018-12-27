<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<style type="text/css">
		h2{
			color: #f0a;
		}
		table{
			text-align: center;
		}
	</style>
</head>
<body>
	<h2>好媒媒班級通訊錄</h2>
	<?php 
		$nomber=array("學號",94951001,94951002,94951003)	;
		$name=array("姓名","黃一丁","劉二毛","張大畫");
		$tel=array("電話","0911000333","0911000555","0911000666");
		$add=array("地址","中壢市","新竹市","高雄市");
		$arr_all=array($nomber,$name,$tel,$add);


	 ?>
	 <table border="1" >
	 	
	 
	 	<?php 


	 	for ($i=0; $i < count($arr_all) ; $i++) { 
	 		echo "<tr>";
	 		for ($j=0; $j < count($arr_all) ; $j++) { 
	 			echo "<td >",$arr_all[$i][$j],"</td>";
	 		}
	 		echo "<tr>";
	 	}


	 	 ?>
		


	 </table>
	
</body>
</html>