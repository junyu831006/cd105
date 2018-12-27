<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	 <table border="2" width="500" align="center"cellspacing="0" >
	<tr>
		<th>等級</th>
		<td><?php echo  $_GET["grade"]," <br>";  ?></td>
	</tr>

	<tr>
		<th>公斤</th>
		<td><?php echo $_GET["kg"]," <br>" ; ?></td>
	</tr>

	 </td>
	<tr>
		<th>小計</th>
		<td><?php 
		$kg = $_GET["kg"];
		$grade =  $_GET["grade"];

		switch ($grade) {
			case '3':
				if ($kg>=100) {
					$kg *= 10;
					}elseif ($kg>=40) {
				$kg *= 15;
					}elseif ( $kg<40) {
				$kg *= 20;}
					break;
			case '2':
				if ($kg>=100) {
				$kg *= 15;
					}elseif ($kg>=40) {
				$kg *= 20;
				 
				}elseif ($kg<40) {
				$kg *= 25;
				 }

				break;
			case '1':
				if ($kg>=100) {
				$kg *= 20;
				
				}elseif ( $kg>=40) {
				$kg *= 25;
				 
				}elseif ($kg<40) {
				$kg *= 30;
				 }
				break;
					
			
			default:
				$kg	= 0;
		}echo "小計{$kg}元";



 ?> </td>
	</tr>
</table>
 
	
</body>
</html>