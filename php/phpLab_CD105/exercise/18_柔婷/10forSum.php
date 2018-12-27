<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<table border="1"  width="500" align="center" cellspacing="0">
		<tr>
				<th>輸入整數</th>
				<td><?php 
					
					echo  $_GET["number"]," <br>"; ?>


				</td>
			</tr>

			<tr>
		<th>小計</th>
		<td><?php 
		$number = $_GET["number"];
		$oddSum;
		$eventSum;
		$total=0;
		for ($i=1; $i <=$number ; $i=$i+1) { 
			echo $i, "<br>";
			$total += $i;
			}echo "總和 : $total<br>";//整數合//

		for ($i=1; $i <=$number ; $i=$i+2) { 
			echo $i ,"<br>";
			$oddSum+=$i;
		}echo "總和 : $oddSum<br>";//基數合//

		for ($i=2; $i <=$number ; $i=$i+2) { 
			 echo $i ,"<br>";
			 $eventSum+=$i;
		}echo "總和 : $eventSum<br>";//偶數合//
		 	
	
		



 ?> </td>
	</tr>
		
		
		</table><br>
		
</body>
</html>