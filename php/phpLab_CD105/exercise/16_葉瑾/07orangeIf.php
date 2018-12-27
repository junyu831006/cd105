<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<style type="text/css">
		h2{
			text-align: center;
		}
		td{
			text-align: center;
		}
		table{
			margin: auto;
		}
	</style>
</head>
<body>

	<!-- 寫程式可輸入橘子一斤的單價, 及購買的斤數,並算出小計為何,若消費金額超過500元, 則打九折,若消費金額超過1000元, 則打七折 -->

	<?php 
		$total = $_REQUEST["price"]*$_REQUEST["number"];

	 ?>
	  <?php  
		if ($total > 1000) {
		 $total *= 0.7; }	
		elseif ($total > 500 ){ 
		 $total *= 0.9; 
	}	
	?>


	<h2>您的消費資料為</h2>
	 <table border='1' width= '250' >
	 	<tr>
	 		<th>單價</th>
	 		<td><?php echo $_REQUEST["price"] ?></td>
	 	</tr>
	 	<tr>
	 		<th>數量</th>
	 		<td><?php echo $_REQUEST["number"] ?></td>
	 	</tr>
	 	<tr>
	 		<th>小計</th>
	 		<td><?php echo $total ?></td>
	 	</tr>
	 	</table>
</body>
</html>