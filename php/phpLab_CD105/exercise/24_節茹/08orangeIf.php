<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php
        if($_GET["weight"]>100){
            switch($_GET["level"]){
                case "1":
                $total = $_GET["weight"] * 20;
                break;
                case "2":
                $total = $_GET["weight"] * 15;
                break;
                case "3":
                $total = $_GET["weight"] * 10;
                break;
            }
        }elseif($_GET["weight"]>40){
            switch($_GET["level"]){
                case "1":
                $total = $_GET["weight"] * 25;
                break;
                case "2":
                $total = $_GET["weight"] * 20;
                break;
                case "3":
                $total = $_GET["weight"] * 15;
                break;
            }
        }elseif($_GET["weight"]<=40){
            switch($_GET["level"]){
                case "1":
                $total = $_GET["weight"] * 30;
                break;
                case "2":
                $total = $_GET["weight"] * 25;
                break;
                case "3":
                $total = $_GET["weight"] * 20;
                break;
            }
        }
    ?>
    <table border="1" width="400px" style="text-align: center">
		<caption>您的消費資料為</caption>
		<tr>
			<td>等級</td>
			<td><?php echo $_GET["level"] ?></td>
		</tr>
		<tr>
			<td>公斤數</td>
			<td><?php echo $_GET["weight"] ?></td>
		</tr>
		<tr>
			<td>小計</td>
			<td><?php echo $total ?></td>
		</tr>
	</table>
</body>
</html>