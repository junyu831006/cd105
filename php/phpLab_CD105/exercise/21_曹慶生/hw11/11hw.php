<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	

  <?php
  
  echo "<table border=1 width=300;>";
for($i=1 ; $i <= 10;$i++){
  echo "<tr><td>{$i}</td>";
  $i++;
  echo "<td>{$i}</td></tr>";
}
  echo "</table>";
?>


</body>
</html>