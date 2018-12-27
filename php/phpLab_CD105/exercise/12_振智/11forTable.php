<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
    <?php 
        echo "<table border=1> ";
        for($i=1;$i<=10;$i++){
            if($i%2 == 1){
                echo "<tr>";
                echo "<td width=20> $i </td>";
            }
            elseif ($i%2 == 0){
                echo "<td width=20> $i </td>";
                echo"<tr>";
            }
        }
        echo "<table>"; 


     ?>
</body>
</html>