<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<style>
		table{
			width: 400px;
			margin: auto;
			border-collapse: collapse;
			color: lightsalmon;
			
		}
	</style>
</head>
<body>
	<?php 
		$rank=$_GET["rank"];
		$qty=$_GET["qty"];
		$total=0;
		if($rank=="1"){
	        if($qty>=100){
	            $total=20*$qty;
	        }elseif($qty>40) {
	            $total=25*$qty;
	        }else{
	            $total=30*$qty;
	        }
	    }elseif($rank=="2"){
	        if($qty>=100){
	            $total=15*$qty;
	        }elseif($qty>40){
	            $total=20*$qty;
	        }else{
	            $total=25*$qty;
	        }
	    }else{
	        if($qty>=100){
	            $total=10*$qty;
	        }elseif($qty>40){
	            $total=15*$qty;
	        }else{
	            $total=20*$qty;
	        }
	    }
    ?>
    <div>
	    <table border='1'>
	    	<tr>
	    		<td>等級</td>
	    		<td><?php echo $rank; ?></td>
	    	</tr>
	    	<tr>
	    		<td>購買 :</td>
	    		<td><?php echo $qty; ?></td>
	    	</tr>
	    	<tr>
	    		<td>總計 :</td>
	    		<td><?php echo $total; ?></td>
	    	</tr>
	    </table>
	</div>
</body>
</html>