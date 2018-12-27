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
    $coco=$_POST["number"];
    $discoco=0;
    if($coco>=4230001){
        $discoco=($coco*0.4)-774400;
    }elseif(($coco>=2260001)&&($coco<=4230000)){
        $discoco=($coco*0.3)-351400;
    }elseif(($coco>=1130001)&&($coco<=2260000)){
        $discoco=($coco*0.2)-125400;
    }elseif(($coco>=500001)&&($coco<=1130000)){
        $discoco=($coco*0.12)-35000;
    }elseif(($coco>=0)&&($coco<=500000)){
        $discoco=$coco*0.05;
    }

echo $discoco;

    ?>
</body>
</html>