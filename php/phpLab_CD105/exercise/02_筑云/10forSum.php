<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
    form,table{
            margin: auto;
            text-align: center;
        }
        table, tr, td{
            border: 1px solid black;
            border-collapse: collapse;
            padding: 5px 10px;
        }
    </style>
</head>
<body>
    <!-- <?php $a = -123;
    echo abs($a);
    ?>  -->
    <!-- 轉正整數練習 -->

    
    <?php
    $number = $_POST["number"];
    settype($number,'integer');
    $total = 0;
    $oddtotal = 0;
    $eventotal = 0;
    ?>
    <?php
    for($i=1;$i<=$number;$i++){
        $total = $i + $total; 
    }
    ?>
    <?php
        for($i=1;$i<=$number;$i+=2){
        $oddtotal = $i + $oddtotal;
    }
    ?>
     <?php
        for($i=2;$i<=$number;$i+=2){
        $eventotal = $i + $eventotal;
    }
    ?>

    <form action="">
        <table>
            <tr>
                <td>輸入的整數</td>
                <td><?php echo $number;?></td>
            </tr>
            <tr>
                <td>整數間的總和</td>
                <td><?php echo $total;?></td>
            </tr>
            <tr>
                <td>奇數和</td>
                <td><?php echo $oddtotal;?></td>
            </tr>
            <tr>
                <td>偶數和</td>
                <td><?php echo $eventotal;?></td>
            </tr>
        </table>
    </form>
</body>
</html>