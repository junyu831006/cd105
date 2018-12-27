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
  $array = array("94951001","黃一丁","0911000333","中壢市中大路1號");
  $array1 = array("94951002","劉二毛","0922999887","高雄市中山路2號");
  $array2 = array("94951003","張大化","0933555779","台北市師大路3號");
   echo "<table border=1><tr>";
   echo "<td>學號</td><td>姓名</td><td>電話</td><td>地址</td><tr>";
  foreach($array as $a => $b){
    echo "<td>{$b}</td>";
  }
  echo "</tr>";
  echo "<tr>";
  foreach($array1 as $a => $b){
    echo "<td>{$b}</td>";
  }
  echo "</tr>";
  echo "<tr>";
  foreach($array2 as $a => $b){
    echo "<td>{$b}</td>";
  }
  echo "</tr></table>"

?>
</body>
</html>