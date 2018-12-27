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
    $pricee=$_REQUEST["price"];
    $number=$_REQUEST["number"];
    $tatal = $pricee * $number;
    if($tatal >= 500){
        $tatal = $tatal * 0.9 ;
    }
    ?>
    <h2>您的消費資料為</h2>
    <table>
    <tr>
    <td>單價</td>
    <td><?php echo "{$_REQUEST["price"]}" ?></td>
    </tr>
    <tr>
    <td>數量</td>
    <td><?php echo "{$_REQUEST["number"]}" ?></td>
    </tr>
    <tr>
    <td>小計</td>
    <td><?php echo "$tatal" ?></td>
    </tr>
    </table>


   
</body>
</html>