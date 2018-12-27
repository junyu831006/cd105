<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Orange</title>
    <style>
      table {
        border-collapse: collapse;
        border: 1px solid gray;
      }
    </style>
  </head>
<body>
	<?php 
		$sum=0;
		switch ($_POST['level']) {
			case '1':
				if ($_POST['kilo']<=40) {
					$sum=$_POST['kilo']*30;
				}
				elseif ($_POST['kilo']>40) {
					$sum=$_POST['kilo']*25;
				}
				elseif ($_POST['kilo']>100) {
					$sum=$_POST['kilo']*20;
				}
				break;
			case '2':
				if ($_POST['kilo']<=40) {
					$sum=$_POST['kilo']*25;
				}
				elseif ($_POST['kilo']>40) {
					$sum=$_POST['kilo']*20;
				}
				elseif ($_POST['kilo']>100) {
					$sum=$_POST['kilo']*15;
				}
				break;
			case '3':
				if ($_POST['kilo']<=40) {
					$sum=$_POST['kilo']*20;
				}
				elseif ($_POST['kilo']>40) {
					$sum=$_POST['kilo']*15;
				}
				elseif ($_POST['kilo']>100) {
					$sum=$_POST['kilo']*10;
				}
					break;	
		}

	 ?>


	<table>
        <tr>
          <td>等級</td>
          <td>
            <?php
                echo $_POST["level"]
             ?>
          </td>
        </tr>

        <tr>
          <td>公斤數</td>
          <td>
            <?php
                echo $_POST["kilo"]
             ?>
          </td>
        </tr>

        <tr>
          <td>小計</td>
          <td>
            <?php
                echo $sum;
             ?>

          </td>
        </tr>

      </table>
</body>
</html>