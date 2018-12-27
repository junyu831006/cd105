<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
		<table border="1">
            <tr>
                <td>a加b</td>
                <td width="100px" align="center"><?php 
                    $a = $_REQUEST["vaule1"];
                    settype($_REQUEST["vaule1"],"float");
                    $b = $_REQUEST["vaule2"];
                    settype($_REQUEST["vaule2"],"float");
                    echo $a+$b;
                     ?></td>
            </tr>
            <tr>
                <td>a-b</td>
                <td width="100px" align="center"><?php 
                    $a = $_REQUEST["vaule1"];
                    settype($_REQUEST["vaule1"],"float");
                    $b = $_REQUEST["vaule2"];
                    settype($_REQUEST["vaule2"],"float");
                    echo $a-$b;
                     ?></td>
            </tr>
            <tr>
                <td>a乘b</td>
                <td width="100px" align="center"><?php 
                    $a = $_REQUEST["vaule1"];
                    settype($_REQUEST["vaule1"],"float");
                    $b = $_REQUEST["vaule2"];
                    settype($_REQUEST["vaule2"],"float");
                    echo $a*$b;
                     ?></td>
            </tr>
            <tr>
                <td>a除b</td>
                <td width="100px" align="center"><?php 
                    $a = $_REQUEST["vaule1"];
                    settype($_REQUEST["vaule1"],"float");
                    $b = $_REQUEST["vaule2"];
                    settype($_REQUEST["vaule2"],"float");
                    echo $a/$b;
                     ?></td>
            </tr>
            <tr>
                <td>a除b的餘數</td>
                <td width="100px" align="center"><?php 
                    $a = $_REQUEST["vaule1"];
                    settype($_REQUEST["vaule1"],"float");
                    $b = $_REQUEST["vaule2"];
                    settype($_REQUEST["vaule2"],"float");
                    echo $a%$b;
                     ?></td>
            </tr>
                
        </table>


</body>
</html>
