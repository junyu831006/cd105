<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
  <style>
    table,h2{
      margin:auto;
    }
    h2{
      text-align:center;
    }
    </style>
</head>
<body>
<?php
$orange2 = $_REQUEST["orange"];
$kg2 = $_REQUEST["kg"];
$all = $orange2 * $kg2;
if ($all>=500) {
  $all *= 0.9 ;
}






?>
<h2>超過500有9折</h2>
<table border="1"width="300">
  <tr>
    <td>單價</td>
    <td><?php echo $orange2; ?>元</td>
  </tr>
  <tr>
    <td>數量</td>
    <td><?php echo $kg2 ;?></td>
  </tr>
  <tr>
    <td>小計</td>
    <td><?php echo $all ;?>元</td>
  </tr>
</table>
  
</body>
</html>