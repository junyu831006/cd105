<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<style type="text/css">
		h3{
			text-align: center;
		}
		table{
			width: 480px;
			margin: auto;
			text-align: center;
		}
	</style>
</head>
<body>
	<?php 
		$rank= $_GET["rank"];
		$kg= $_GET["kg"];
		switch ($rank) {
			case '1':
				if ($kg>100) {
					$total=20*$kg;
				}elseif($kg>40){
					$total=25*$kg;
				}
				else{
					$total=30*$kg;
				}
			break;
			case'2':
				if ($kg>100) {
					$total=15*$kg;
				}elseif($kg>40){
					$total=20*$kg;
				}
				else{
					$total=25*$kg;
				}	
			break;
			case'3':
				if ($kg>100) {
				$total=10*$kg;
				}elseif($kg>40){
					$total=15*$kg;
				}
				else{
					$total=20*$kg;
				}
			break;
		}
	 ?>
	 <h3>您的消費資料為</h3>
	 <table border="1">
	 	<tr>
	 		<td>等級</td>
	 		<td><?php echo $rank ?></td>
	 	</tr>
	 	<tr>
	 		<td>公斤</td>
	 		<td><?php echo $kg ?></td>
	 	</tr>
	 	<tr>
	 		<td>小計</td>
	 		<td><?php echo $total ?></td>
	 	</tr>
	 </table>
</body>
</html>