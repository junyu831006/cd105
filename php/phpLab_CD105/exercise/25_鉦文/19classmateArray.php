<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	
	<div style="width:500px; margin:auto; text-align: center;">		
		@@@@@@@@@作業十九　：(一維array練習)  
19classmateArray.php
以陣列存放3位同學的通訊資料, 並印出
<br><br>
	<?php  
			$id = array('94951001','94951002', '94951003');
			$name = array('黃一丁','劉二毛','張大化');
			$phone= array('0911000333','0922999887', '0933555779');
			$addr= array('中壢市中大路1號','高雄市中山路2號', '台北市師大路3號');
			$len = count($id);

			//echo "$id[0] $name[0] $phone[0]";
			echo "<table border='1'>";
				echo "<tr style='background-color:orange'>
						<td><b>學號</b></td><td><b>姓名</b></td><td><b>電話</b></td><td><b>地址</b></td>
					 </tr>";
				for ($i=0; $i <$len ; $i++) { 
					echo "<tr>
							<td>$id[$i]</td><td>$name[$i]</td><td>$phone[$i]</td><td>$addr[$i]</td>
						 </tr>";
				}
			echo "</table>";
		?>
	</div>

</body>
</html>