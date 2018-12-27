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
$pparray=array();
    $arraySum=0;
    $big=1;
    $small=100;
    for($i=1;$i<=10;$i++){
        array_push($pparray,rand(1,100));   

        
    }
    
    foreach($pparray as $data){
        echo $data,"<br>";
        if($data>=$big){
            $big=$data;
        }elseif($data<=$small){
            $small=$data;
        }
        $arraySum+= $data;
    } 
    echo  "總和是  ",$arraySum,"<br>";
    echo "最大是",$big,"<br>";
    echo "最小是",$small;
    ?>
</body>
</html>