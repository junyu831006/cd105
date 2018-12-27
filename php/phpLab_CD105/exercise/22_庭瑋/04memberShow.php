<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
  <style>
      table{
        width:500px;
        margin:auto;
        text-align:center;
        height:300px;

      }
  </style>
  
</head>
<body>
 
<table border="1" bgcolor="cyan";>
  <tr>
    <td>姓名</td>
    <td> 
        <?php
            echo  $_REQUEST["memName"];
        ?>
    </td>
  </tr>
  <tr>
    <td>帳號</td>
    <td> 
        <?php
            echo  $_REQUEST["memId"];
        ?>
    </td>
  </tr>
  <tr>
    <td>密碼</td>
    <td> <?php
            echo  $_REQUEST["memPsw"];
         ?>
    </td>
  </tr>
  <tr>
    <td>e-mail</td>
    <td> 
         <?php
            echo  $_REQUEST["email"];
         ?>
    </td>
  </tr>
  <tr>
    <td>性別</td>
    <td> 
        <?php
            echo  $_REQUEST["sex"];
        ?>
    </td>
  </tr>
  <tr>
    <td>生日</td>
     <td>
         <?php
            echo  $_REQUEST["birthday"];
         ?>
    </td>
  </tr>
  <tr>
    <td>連絡電話</td>
    <td> 
        <?php
            echo  $_REQUEST["tel"];
        ?>
    </td>
  </tr>  









</table>







</body>
</html>