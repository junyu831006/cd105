<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
<table border="1" cellspacing="0">
	<tr style="background-color: orange">
		<th>學號</th>
		<th>姓名</th>
		<th>電話</th>
		<th>地址</th>
	</tr>
<?php
//作法一: foreach
$sorce = array( array("94951001","黃一丁","0911000333","中壢市中大路1號"),array("94951002","劉二毛","0922999887","高雄市中山路2號"),array("94951003","張大化","0933335779","台北市師大路3號"));
foreach ($sorce as $row) {
	echo "<tr>";
	foreach ($row as $index => $data) {
		echo "<td>",$data,"</td>";
	}
	echo "</tr>";
}

//作法一: for迴圈
$studentInfo= array( array("94951001","黃一丁","0911000333","中壢市中大路1號"),array("94951002","劉二毛","0922999887","高雄市中山路2號"),array("94951003","張大化","0933335779","台北市師大路3號"));
for($i=0; $i<3 ;$i++){
	echo "<tr>";
	for($j=0;$j<4;$j++){
		echo "<td>",$studentInfo[$i][$j],"</td>";
	}
	echo "</tr>";
}
?>
</table>	

</body>
</html>