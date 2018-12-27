<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>輸出網頁練習</title>
	<style type="text/css">
		td{
			padding: 5px;
		}
		table,div{			
			width:250px;
		}
		h3{
			color:red; 
			text-align:center;
		}
	</style>
</head>
<body>

<?php 
echo "<div >
<h3>好媒媒班級通訊錄</h3>
<table border=1; >
<tr bgcolor='pink'><th>學號</th><th>姓名</th><th>電話</th></tr>
<tr><td>94951001</td><td>黃一丁</td><td>0911000333</td></tr>
<tr><td>94951002</td><td>劉二毛</td><td>0922999887</td></tr>
<tr><td>94951003</td><td>張大化</td><td>0922999887</td></tr>
</table>
</div>";
?>

</body>
</html>