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
        $count=$_POST["data-math"];
        $add=0;
        $cardinal=0;
        $even=0;
        for($i=1;$i<=$count;$i++){
            $add+=$i;
            if($i%2==0){
                $even+=$i;
            }else{
                $cardinal+=$i;
            }
        }



    ?>

    <div class="wrap">
        <div>
            <label>總數和 :</label>
            <label><?php echo $add; ?></label>
        </div>
        <div>
             <label>基數和 :</label>
             <label><?php echo $cardinal; ?></label>
        </div>
        <div>
             <label>偶數和 :</label>
             <label><?php echo $even; ?></label>
        </div>
    </div>
</body>
</html>