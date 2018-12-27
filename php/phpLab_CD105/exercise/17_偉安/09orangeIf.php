<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        table,tr,td{
            border: 1px solid black;
            text-align: center;
            width: 500px;
            margin:auto;
        }
        h2{
            text-align: center;
        }
    </style>
</head>
<body>
<?php
    $level=$_REQUEST["level"];
    $number=$_REQUEST["number"];
    switch($level){
        case"1":
        if($number >= 100){
            $price = 20 ;
        }elseif( $number >= 40){
            $price = 25 ;
        }elseif($number <40){
            $price = 30 ;
        }
        break;
        case"2":
        if($number >= 100){
            $price = 15 ;
        }elseif( $number >= 40){
            $price = 20 ;
        }elseif($number <40){
            $price = 25 ;
        }
        break;
        case"3":
        if($number >= 100){
            $price = 10 ;
        }elseif( $number >= 40){
            $price = 15 ;
        }elseif($number <40){
            $price = 20 ;
        }
        break;
    }
    $total = $price * $number;
    ?>
    <h2>您的消費資料為</h2>
    <table>
    <tr>
    <td>等級</td>
    <td><?php echo "{$_REQUEST["level"]}" ?></td>
    </tr>
    <tr>
    <td>數量</td>
    <td><?php echo "{$_REQUEST["number"]}" ?></td>
    </tr>
    <tr>
    <td>小計</td>
    <td><?php echo "$total" ?></td>
    </tr>
    </table>


   
</body>
</html>