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
    if($rank=="1"){
        if($kg>100){
            $money=20*$kg;
        }elseif(($kg>40) &&($kg<=100)){
            $money=25*$kg;
        }else{
            $money=30*$kg;
        }
    }elseif($rank=="2"){
        if($kg>100){
            $money=15*$kg;
        }elseif(($kg>40) &&($kg<=100)){
            $money=20*$kg;
        }else{
            $money=25*$kg;
        }
    }else{
        if($kg>100){
            $money=10*$kg;
        }elseif(($kg>40) &&($kg<=100)){
            $money=15*$kg;
        }else{
            $money=20*$kg;
        }
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