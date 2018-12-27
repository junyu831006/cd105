<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>

</head>
<body>
	<?php 
	$level=$_GET["level"];
	$weight=$_GET["weight"];
	
	
	
	if($level==1){
		if($weight<=40){
			$amount=$weight*30;
		}
		if($weight>40){
		  $amount=$weight*25;
		}
			
		if($weight>100){
			$amount=$weight*20;
		}		
	}
	if($level==2){
		if($weight<=40){
			$amount=$weight*25;
		}
		if($weight>40){
			$amount=$weight*20;
		}
		if($weight>100){
			$amount=$weight*15;
		}	
	}
	if($level==3){
		if($weight<=40){
			$amount=$weight*20;
		}
		if($weight>40){
		  $amount=$weight*15;
		}
			
		if($weight>100){
			$amount=$weight*10;
		}		
	}
	?>

	<table>
		
		<tr>
			<td>等級</td>
			<td>
				<?php 
				echo$level;
				?>
			</td>
		</tr>
		<tr>
			<td>公斤數</td>
			<td>
				<?php 
				echo $weight ;
				?>
			</td>
		</tr>
		<tr>
			<td>小計</td>
			<td><?php 
				echo $amount
				 ?></td>
		</tr>
	</table>
	<input type="submit" value="計算">
	<input type="reset" value="重新設定">



	


	
</body>
</html>