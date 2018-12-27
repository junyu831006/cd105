<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>08orangeIf</title>
	<style type="text/css">
		table{
			width: 480px;
			margin: auto;
		}
		table:first-child{
			text-align: center;
		}
	</style>
</head>
<body>
	<table>
		<tr>
			<td>計價</td>
			
		</tr>
	</table>
	<?php 

	$amount=$_GET["amount"];
	$level=$_GET["level"];
	

	if ($level ==1) 
	{
		if ($amount<=40) 
		{	
			$price= 30;
			$total= $amount * $price;
		}
		elseif ($amount<=100) 
		{	
			$price= 25;
			$total= $amount *$price;
		}
		else
			{	
				$price= 20;
				$total= $amount *$price;
			}
	}
	elseif ($level ==2)
	{
		if ($amount<=40) 
		{	
			$price= 25;
			$total= $amount *$price;
		}
		elseif ($amount <=100) 
		{	
			$price= 20;
			$total= $amount *$price;
		}
		else
		{	
			$price= 15;
			$total= $amount *$price;
		}
		
	}
	
	elseif ($level ==3) 
	{
		if ($amount<=40) 
		{	
			$price= 20;
			$total= $amount *20;
		}
		elseif ($amount <=100) 
		{	
			$price= 15;
			$total= $amount *$price;
		}
		else
		{	
			$price= 10;
			$total= $amount *$price;
		}
		
	}

		echo 
			"<table border='1' >
		<tr>
			<td>單價</td>
			<td> $price </td>
		</tr>
		<tr>
			<td>數量</td>
			<td> $amount </td>
		</tr>
		<tr>
			<td>小計</td>
			<td> $total </td>
		</tr>
	 </table>"
	 ?>
	
</body>
</html>