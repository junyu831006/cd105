<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
         .wrap{
            width: 960px;
            margin: auto;
            text-align:left; 
        }

    </style>
</head>
<body>

    <div class="wrap">
        <?php
            
            $prize=rand(0 ,10)*100;
            $total_prize=0;
            $i=1;
            echo "<br>Prize $i : $prize";
            $total_prize+=$prize;
            echo "<br>Total prize : $total_prize<br>";
            $i++;

            while($prize!=0){
                $prize=rand(0 ,10)*100;
                echo "<br>Prize $i : $prize";
                $total_prize+=$prize;
                echo "<br>Total prize : $total_prize<br>";
                $i++;
            }

        ?>    
    </div>

</body>
</html>