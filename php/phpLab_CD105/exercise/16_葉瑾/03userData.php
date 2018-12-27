<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Examples</title>
<style type="text/css">
	th{ 
		background-color: lightpink;
	}

</style>

</head>
<body>
    <?php

    $name="小丸子";
    $age="是秘密呦...";
    $address="漫畫走廊...";

    echo "個人小檔案";
    echo "<table border='1' width= '150' >
    
    	<th>姓名：</th>
    	<td>$name</td>
    	
    <tr>
    	<th>年齡：</th>
    	<td>$age</td>
	</tr>
    <tr>
    	<th>地址：</th>
    	<td>$address</td>
    </tr>

    </table>";


    ?>
    
</body>
</html>