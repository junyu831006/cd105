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
  $all3=0;
  $all2=0;
 $all=0; 
$number = $_REQUEST["number"]; 
for($i=0;$i <= $number;$i++){
   $all +=$i;
 
}
for($i=0;$i<=$number;$i++){
    if($i%2==0){
      $all2 +=$i;
      
    }
    else{
      $all3 +=$i;
    }
}
echo "整數和$all","<br>";
echo "偶數和$all2","<br>";
echo "奇數和$all3","<br>";

?>
</body>
</html>