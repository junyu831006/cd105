<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<style>
	table{
		width:200px;
	}
	    td{
		border:2px solid #77DDFF;	
	}

	.line-1{
		background-color: pink;
	}
	</style>
</head>
<body>
	<?php 
	$name="小丸子";
	$age="秘密";
	$add="漫畫走廊";
    ?>

    
    <table>
    <tr>
    <td class="line-1">
    <?php
    echo "姓名";
 	?>
 	</td>
    <td>
    <?php
    echo $name;
    ?>
    </td>
	</tr>

    <tr>
    <td class="line-1">
    <?php
    echo "年齡";
    ?>
    </td>
    <td>
    <?php 
    echo $age;
    ?>
    </td>
    </tr>

    <tr>
    <td class="line-1">
    <?php
    echo "地址";
    ?>
    </td>
    <td>
    <?php
    echo $add;
    ?>
    </td>
    </tr>
    
    

    


</body>
</html>