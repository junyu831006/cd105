<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Examples</title>
<style type="text/css">
h2 {
	color:deeppink;
}	
</style>
</head>
<body>
<h2>句型</h2>

<?php
$lowType = "1";
$education = true;
switch( $lowType ){
  case "1":  //$amount :3000
    $amount = 5000;
    if( $education == true){
      $amount += 1000;
    }
    break;
  case "2":
    $amount = 3000;
    break;
  case "3":
    $amount = 1000;
    break;
  default:
    $amount = 0;  
}

echo "補助款 : {$amount}元<br>";
?>   

<hr>
<h2>現在是幾月 ? date()</h2>
<?php 

$mm = date("m");
echo $mm, "<br>";
echo gettype($mm), "<br>";
?>
<hr>
<h2>這個月有幾天 ? (if)</h2>
<?php 
//$days ???
$mm = date("m");

if( $mm == "1" || $mm=="3" || $mm=="5" || $mm=="7" || $mm=="8" || $mm=="10" || $mm=="12"){
  $days = 31;
}elseif ($mm == "2") {
  $days = 28;
}elseif ($mm == "4" || $mm == "6" || $mm == "9" || $mm == "11") {
  $days = 30;
}
echo "{$mm}月有{$days}天<br>";
?>

<hr>
<h2>這個月有幾天 ? (switch)</h2>
<?php 
$mm = "09";
switch( $mm ){
  case "01":
  case "03":
  case "05":
  case "07":
  case "08":
  case "10":
  case "12":
    $days = 31;
    break;
  case "02":
    $days = 28;
    break;
  case "04":
  case "06":
  case "09":
  case "11":
    $days = 30;
    break;
  default:
    $days = "不知道!";  
}
echo "{$mm}月有{$days}天<br>";
?>


<hr>
<h2>這個月有幾天 ? (switch)</h2>
<?php 
$mm = "09";
settype( $mm, "integer");
switch( $mm ){
  case 1:  case 3:  case 5:  case 7:  case 8:  case 10:  case 12:
    $days = 31;
    break;
  case 2:
    $days = 28;
    break;
  case 4:  case 6:  case 9:  case 11:
    $days = 30;
    break;
  default:
    $days = "不知道!";  
}
echo "{$mm}月有{$days}天<br>";
?>
</body>
</html>