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
        $a = 10;
        $sum = 0;
        for ($i = 1; $i <= $a; $i++) {
            $sum += $i;
            for ($b = 1; $b < $i; $b++) {
                echo $b, "+";
            }
            echo $i, "=", $sum;
            echo "<br>";
        }
    ?>
</body>
</html>