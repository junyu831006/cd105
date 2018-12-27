<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
  <style>
  h2{
    color:blue;
    text-align:center;
  }
  table{
    margin:auto;
    background:red;
  }
  
  
  </style>
</head>
<body>
  <?php
// $orange2= $_REQUEST["orange"];
// $kg2 =$_REQUEST["kg"]
  ?>

  <h2>您的消費資料為</h2>
  <table border="1"width="300" >

    <tr>
      <td>單價</td>
      <td><?php  echo $_REQUEST["orange"];   ?>元</td>
    </tr>
    <tr>
      <td>數量</td>
      <td><?php echo $_REQUEST["kg"];   ?></td>
    </tr>
    <tr>
      <td>小計</td>
      <td><?php echo $_REQUEST["orange"] * $_REQUEST["kg"] ;  ?>元</td>
    </tr>




  </table>
</body>
</html>