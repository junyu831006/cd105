<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>10forSum.php</title>
	<style type="text/css">
		body{
			width: 960px;
			margin: auto;
			text-align: center;
			font-size: 20px;
		}
	</style>
</head>
<body>
	<p><?php 
		$fig = (int)$_REQUEST["fig"];
		echo "您選取的整數是{$fig} <br>";
		$total=0;

		for ($i=1; $i <= $fig; $i++) { 
			$total += $i;
		}
		echo "整數和：{$total} <br>";
		
		$total=0;
		for ($i=1; $i <= $fig; $i+=2) { 
			$total += $i; //1+3...
		}
		echo "奇數和：{$total} <br>";

		$total=0;
		for ($i=2; $i <= $fig; $i+=2) { 
			$total += $i; //2+4...
		}
		echo "偶數和：{$total} <br>";

	 ?>	</p>

</body>
</html>