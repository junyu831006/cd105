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
      $orange = $_REQUEST["orange"];
      $weight = $_REQUEST["weight"];
      echo "您購買的等級是{$orange}級","<br>";
      echo "您購買的公斤是{$weight}公斤","<br>";
switch($orange){
  case "3":
    if($weight >= 100){
      $weight *= 10;
      echo "小計:{$weight}元";  
    }
    elseif($weight >= 40){
        $weight *= 15;
        echo "小計:{$weight}元";
    }
    else{
        $weight *= 20;
        echo "小計:{$weight}元";
    }
    break;
  
  case "2":
    
    if($weight >=100){
      $weight *=15;
      echo "小計:{$weight}元";
    }
    elseif($weight >=40){
      $weight *=20;
      echo "小計:{$weight}元";
    }
    else{
      $weight *=25;
      echo "小計:{$weight}元";
    }
    break;
  case "1":
  
    if($weight >=100){
      $weight *=20 ;
      echo "小計:{$weight}元";
    }
    elseif($weight >=40){
      $weight *= 25;
      echo "小計:{$weight}元";
    }
    else{
      $weight *= 30;
      echo "小計:{$weight}元";
    }
    break;
}
      
?>
  
</body>
</html>