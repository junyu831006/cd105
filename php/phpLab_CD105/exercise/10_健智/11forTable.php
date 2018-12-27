<!DOCTYPE html>
	<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Document</title>
		<style type="text/css">
			table{
				margin: auto;
				border-collapse: collapse;
   				width: 500px; 	
   				/*自動斷行*/
   				word-wrap: break-word;
   				/*表格固定欄寬*/
   				table-layout: fixed;
			}
			td{
				padding-left: 5px;
			}

		</style>
	</head>
	<body>
		<table border="1">
		<?php  
			for ($i=1; $i <=10 ; $i++) { 
				if ($i%2 == 1) {
					echo "<tr><td> $i </td>";
				}else {
					echo "<td> $i </td></tr>";
				}
			}
		?>
		</table>













		<hr>
		<table border="1"> -->
			<tr>
				<?php  
				for ($i=1; $i <=0 ; $i++) { 
					# code...
				}
				?>
				<td><?php echo $i; ?></td>
				<td><?php echo $i+1; ?></td>
			</tr>
			<tr>
				<?php  
				for ($i=3; $i <=0 ; $i++) { 
					# code...
				}
				?>
				<td><?php echo $i; ?></td>
				<td><?php echo $i+1; ?></td>
			</tr>
			<tr>
				<?php  
				for ($i=5; $i <=0 ; $i++) { 
					# code...
				}
				?>
				<td><?php echo $i; ?></td>
				<td><?php echo $i+1; ?></td>
			</tr>
			<tr>
				<?php  
				for ($i=7; $i <=0 ; $i++) { 
					# code...
				}
				?>
				<td><?php echo $i; ?></td>
				<td><?php echo $i+1; ?></td>
			</tr>
			<tr>
				<?php  
				for ($i=9; $i <=0 ; $i++) { 
					# code...
				}
				?>
				<td><?php echo $i; ?></td>
				<td><?php echo $i+1; ?></td>
			</tr>
		</table>
	</body>
	</html>	