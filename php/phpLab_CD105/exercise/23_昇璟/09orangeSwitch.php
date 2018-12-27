<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>
<img src="價位表.png" ><br>
<?php
      $orange = $_REQUEST["orange"];
      $kg = $_REQUEST["kg"];
      echo "您購買的等級是{$orange}級","<br>";
      echo "您購買的公斤是{$kg}公斤","<br>";
switch($orange){
  case "3":
    if($kg >= 100){
      $kg *= 10;
      echo "小計{$kg}元";  
    }
    elseif($kg >= 40){
        $kg *= 15;
        echo "小計{$kg}元";
    }
    else{
        $kg *= 20;
        echo "小計{$kg}元";
    }
    break;
  
  case "2":
    
    if($kg >=100){
      $kg *=15;
      echo "小計{$kg}元";
    }
    elseif($kg >=40){
      $kg *=20;
      echo "小計{$kg}元";
    }
    else{
      $kg -=25;
      echo "小計{$kg}元";
    }
    break;
  case "1":
  
    if($kg >=100){
      $kg *=20 ;
      echo "小計{$kg}元";
    }
    elseif($kg >=40){
      $kg *= 25;
      echo "小計{$kg}元";
    }
    else{
      $kg *= 30;
      echo "小計{$kg}元";
    }
    break;
}
      
?>
  
</body>
</html>