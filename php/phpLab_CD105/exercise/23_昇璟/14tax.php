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
$number = $_REQUEST["number"];
$all = 0;
    if($number>=4230001){
        $lv=1;
        $number *=0.4;
       $number -=774400;
    }
    elseif($number>=2260001){
        $lv=2;
        $number *=0.3;
        $number -= 351400;
    }
    elseif($number>=1130001){
        $lv=3;
        $number *=0.2;
        $number -= 125400;
    }
    elseif($number>=500001){
        $lv=4;
        $number *= 0.12;
        $number *= 35000;
    }
    else{
        $lv=1;
        $number *= 0.05;
    }
echo  "等級是{$lv}應繳稅",floor($number),"元";
?>
    
</body>
</html>