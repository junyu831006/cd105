<?php
  //echo "<pre>"; print_r($_GET); echo "</pre>";
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>會員資料</title>
  </head>
  <body>
    <h3>您的會員資料為</h3>
    <table border="1">
      <tr>
          <td>姓名</td>
          <td>
          <?php
            echo $_GET["memName"];
          ?>
          </td>
      </tr>


      <tr>
          <td>帳號</td>
          <td>
          <?php
            echo $_GET["memId"];
          ?>
          </td>
      </tr>


      <tr>
          <td>密碼</td>
          <td>
          <?php
            echo $_GET["memPsw"];
          ?>
          </td>
      </tr>


      <tr>
          <td>e-mail</td>
          <td>
          <?php
            echo $_GET["email"];
          ?>
         </td>
      </tr>

      <tr>
          <td>性別</td>
          <td>
          <?php
            echo $_GET["sex"];
          ?>
          </td>
      </tr>


      <tr>
          <td>生日</td>
          <td>
          <?php
            echo $_GET["birthday"];
          ?>
          </td>
      </tr>


      <tr>
          <td>聯絡電話</td>
          <td>
          <?php
            echo $_GET["tel"];
          ?>
          </td>
      </tr>
    </table>
  </body>
</html>
