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
    $rank=$_POST["rank"]; 
    $kg=$_POST["kg"];
    $select=0;
    $money=0;

    switch($rank){
        case 1:
        $select=25;
        break;
        case 2:
        $select=20;
        break;
        case 3:
        $select=15;
        break;
    }
    if($kg>100){
        $money=($select-5)*$kg;
    }elseif(($kg>40)&&($kg<=100)){
        $money=$select*$kg;
    }else{
        $money=($select+5)*$kg;
    }


    ?>

    <div class="wrap">
        <div>
            <label>等級 :</label>
            <label><?php echo $rank; ?></label>
        </div>
        <div>
             <label>購買 :</label>
             <label><?php echo $kg; ?></label>
        </div>
        <div>
             <label>總金額 :</label>
             <label><?php echo $money; ?></label>
        </div>
    </div>
</body>
</html>