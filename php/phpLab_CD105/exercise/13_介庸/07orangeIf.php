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
    $a = $_POST["a"];
    $b = $_POST["b"];

    $c = (int)$a * (int)$b;

    if((substr($a,0,1)==0)||(substr($b,0,1)==0)){
        $a="無效";
        $b="無效";
        $c="為什麼要調皮?0和非數字不能輸入阿";
    } else {
        if ($c < 500) {
            $c=(string)$c."(這樣沒有折扣喔)";
        } else {
            if (($c >= 500) && ($c < 1000)) {
                $c = $c * 0.9;
            } else {
                $c = $c * 0.7;
            }
        }
    }

    ?>
    <h1>hi你的推銷資料為</h1>
    <table border=1>
        <tr>
            <td>單價</td>
            <td><?php echo $a; ?></td>
        </tr>
        <tr>
            <td>數量</td>
            <td><?php echo $b; ?></td>
        </tr>
        <tr>
            <td>小記</td>
            <td><?php echo $c; ?></td>
        </tr>
    </table>

</body>
</html>