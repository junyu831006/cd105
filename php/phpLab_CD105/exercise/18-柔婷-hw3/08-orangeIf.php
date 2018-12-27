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

		if ($grade==3 && $kg>=100) {
			$kg *= 10;
			echo "小計{$kg}元";

		}elseif ($grade==3 && $kg>=40) {
			$kg *= 15;
			echo "小計{$kg}元"; 
		}elseif ($grade==3 && $kg<40) {
			$kg *= 20;
			echo "小計{$kg}元"; }


		if ($grade==2 && $kg>=100) {
			$kg *= 15;
			echo "小計{$kg}元";

		}elseif ($grade==2 && $kg>=40) {
			$kg *= 20;
			echo "小計{$kg}元"; 
		}elseif ($grade==2 && $kg<40) {
			$kg *= 25;
			echo "小計{$kg}元"; }

		if ($grade==1 && $kg>=100) {
			$kg *= 20;
			echo "小計{$kg}元";

		}elseif ($grade==1 && $kg>=40) {
			$kg *= 25;
			echo "小計{$kg}元"; 
		}elseif ($grade==1 && $kg<40) {
			$kg *= 30;
			echo "小計{$kg}元"; }
			










 ?> </td>
	</tr>
</table>

	
</body>
</html>