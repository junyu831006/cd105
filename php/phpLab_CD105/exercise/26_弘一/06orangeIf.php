<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	

<table border="1">

    		<tr>
    			<td>單價:</td>
    		   	<td width="100px" align="center"><?php 
    				$a = $_REQUEST["vaule1"];
    				settype($_REQUEST["vaule1"],"float");
                    echo $a,"元";
    				?></td>
    		</tr>
    		<tr>
    			<td>你買了:</td>
    		   	<td width="100px" align="center"><?php 
    				$b = $_REQUEST["vaule2"];
    				settype($_REQUEST["vaule2"],"float");
                    echo $b,"個";
    				?></td>
    		</tr>
    		<tr>
    			<td>總價</td>
    			<td width="100px" align="center">
                    <?php
    				$a = $_REQUEST["vaule1"];
    				settype($_REQUEST["vaule1"],"float");
    				$b = $_REQUEST["vaule2"];
    				settype($_REQUEST["vaule2"],"float");
    				echo $a*$b,"元";
    				 ?></td>
    		</tr>
	    	<?php
	    	$a = $_REQUEST["vaule1"];
			settype($_REQUEST["vaule1"],"float");
			$b = $_REQUEST["vaule2"];
			settype($_REQUEST["vaule2"],"float");
			$total = $a*$b;
			if($total >= 500){
				$total = $total*0.9;
				echo "<tr>
	    			<td>9折價格</td>
	    			<td style='color:#f00' align='center'>{$total}元</td>
	    			</tr>";
			}
	    	?>
    	</table>
</body>
</html>