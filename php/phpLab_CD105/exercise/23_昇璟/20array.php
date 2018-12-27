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
$array= array();
for($i=0;$i<=9;$i++){
  $num = mt_rand(1,100);
  echo "$num";
  $array[$i]=$num;
}
$all=0;
$k=0;
$min=100;
foreach($array as $a =>$b){
  $all += $b;
  if($k<$b){
    $k=$b;
  }
  elseif($min>$b){
    $min=$b;
  }
}
echo "最大值{$k} <br>";
echo "最小值{$min} <br>";
echo "總和{$all}";
?>
  
</body>
</html>