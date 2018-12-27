<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>14tax.php</title>
    <style>
        form, table{
            margin: 30px auto 0;
            text-align: center;
        }
        table, tr ,td{
            width: 300px;
            border: 1px solid black;
            border-collapse: collapse;
        }
    </style>
</head>
<body>
    <?php
        $earn = $_POST["earn"];
    ?>
    <?php
        if($earn>0 && $earn<=500000){
            $earn *=0.05;
        }elseif($earn>=500001 && $earn<=1130000){
            $earn =$earn*0.12-35000;
        }elseif($earn>=1130001 && $earn<=2260000){
            $earn =$earn*0.2-125400;
        }elseif($earn>= 2260001 && $earn<=4230000){
            $earn =$earn*0.3-351400;
        }elseif($earn>=4230001){
            $earn =$earn*0.3-774400;
        }
        settype($earn,'integer');
    ?>
    <?php
        echo "<table>";
            echo "<tr>";
                echo "<td>應繳稅額</td>";
                echo "<td>", $earn ,"</td>";
            echo "</tr>";
       echo "</table>";
    ?>
</body>
</html>