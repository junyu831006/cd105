<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<table border="1">

<?php

$data01 = array("1011","蔚蔚為","084543645454","56454545454");
$data02 = array("1012","哈摟哈摟","494949494949","dijsdijlaisjd");
$data03 = array("1013","不再加喔","808080808080","sdisjdsdsd");
$a=0;
?>
	<table border='1'>
		<tr>
			<th>學號</th>
			<th>姓名</th>
            <th>電話</th>
            <th>地址</th>
		</tr>
		<tr>
			<td ><?php echo $data01[0]; ?></td>
            <td ><?php echo $data01[1]; ?></td>
            <td ><?php echo $data01[2]; ?></td>
            <td ><?php echo $data01[3]; ?></td>
		</tr>
		<tr>
            <td ><?php echo $data02[0]; ?></td>
            <td ><?php echo $data02[1]; ?></td>
            <td ><?php echo $data02[2]; ?></td>
            <td ><?php echo $data02[3]; ?></td>
		</tr>
		<tr>
            <td ><?php echo $data03[0]; ?></td>
            <td ><?php echo $data03[1]; ?></td>
            <td ><?php echo $data03[2]; ?></td>
            <td ><?php echo $data03[3]; ?></td>
		</tr>
	</table>

</body>
</html>