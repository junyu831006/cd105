<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>變數練習</title>
	<style type="text/css">
	.col-title{
	 	background-color:pink;
	 	font-weight: bold;
	 	width:50px; 
	 	text-align: center;
	 }
	 td{
	 	padding:5px;
	 }
	 h3{
	 	margin-right: 20px;
	 	color:red; 
	 	text-align:center;
	 }
</style>
</head>
<body>

	<?php 
	$name = "小丸子";
	$age =  "是秘密喲...";
	$addr = "漫畫走廊...";

	echo

	"<div style='width:180px'>
	<h3>個人小檔案</h3>
	<table border='1'>	
	<div>
			<tr><td class='col-title'>姓名:</td><td>$name</td></tr>
			<tr><td class='col-title'>年齡:</td><td>$age</td></tr>
			<tr><td class='col-title'>地址:</td><td>$addr</td></tr>

	</div>
	</table>
	</div>
	";

 	?>

</body>
</html>








<!-- 





