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
$a="*";
for($i=1;$i<=11;$i++){
    if($i<=6){
        for($j=1;$j<=$i;$j++){
            echo "$a";
        }
        echo "<br>";
    }
    elseif($i>=7){
        for($k=11;$k>=$i;$k--){
            echo "$a";
        }
        echo "<br>";
    }
}


?>
</body>
</html>