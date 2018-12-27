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
            text-align:center; 
        }

        table{
            width: 198px;
            margin: auto;
            border-collapse: collapse;
        }

    </style>
</head>
<body>
    <?php
        $amount=0;
        $amount_odd=0;
        $amount_even=0;

        for($i=0;$i<=$_POST["number"];$i++){
            $amount+=$i;
        }

        for($i=1;$i<=$_POST["number"];$i+=2){
            $amount_odd+=$i;
        }
        
        for($i=0;$i<=$_POST["number"];$i+=2){
            $amount_even+=$i;
        }
    ?>

    <div class="wrap">
        <h3>計算１到某正整數間的整數總和、奇數和、偶數和</h3>
        <table border="1">
            <tr>
                <td>正整數</td>
                 <td>
                    <?php 
                        echo $_POST["number"];
                    ?>
                </td>
            </tr>
            <tr>
                <td>總和</td>
                <td>
                    <?php 
                        echo $amount;
                    ?>
                </td>
            </tr>
            <tr>
                <td>奇數和</td>
                <td>
                    <?php 
                        echo $amount_odd;
                        ?>
                </td>
            </tr>
            <tr>
                <td>偶數和</td>
                <td>
                    <?php 
                        echo $amount_even;
                    ?>
                </td>
            </tr>
        </table>
    </div>

</body>
</html>