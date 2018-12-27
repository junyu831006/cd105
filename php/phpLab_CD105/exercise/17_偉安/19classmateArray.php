<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<table border="1" align="center">
    <tr>
        <td>學號</td>
        <td>姓名</td>
        <td>手機</td>
        <td>地址</td>
    </tr>

<?php
$num = array("94951001","94951002","94951003");
$name =array("黃一丁","劉二毛","張大化");
$phone =array("0922999887","0911000333","0933555779");
$add =array("中壢市中大路1號","高雄市中山路2號","台北市師大路3號");
for($i=0;$i<=2;$i++){
echo"<tr>",
    "<td>$num[$i]</td>",
    "<td>$name[$i]</td>",
    "<td>$phone[$i]</td>",
    "<td>$add[$i]</td>",
    "</tr>";
}
?>
 </table>   
</body>
</html>