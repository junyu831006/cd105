<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Document</title>
  <style>
    th{
      background:blue;
    }
  </style>
</head>
<body>
  <?php
$name = "小丸子";
$age = "是秘密呦..." ;
$address = "漫畫走廊 ";
?>
<table border="1">
       <tr>
         <th>姓名:</th>
         <td> <?php echo "$name";
          ?> </td>
      </tr>
       <tr>
         <th>年齡:</th>
         <td> <?php echo "$age";
          ?> </td>
      </tr>
       <tr>
         <th>地址:</th>
         <td> <?php echo "$address";
          ?> </td>
      </tr>
    </table>


</body>
</html>