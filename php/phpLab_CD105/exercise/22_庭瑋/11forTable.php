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