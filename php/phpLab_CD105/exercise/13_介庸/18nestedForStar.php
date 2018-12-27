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
        $e = 10;
        $sum = 0;
        for ($i = 1; $i <= $e; $i++) {
            $sum += $i;
            for ($g = 1; $g < $i; $g++) {
                echo $g, "+";
            }
            echo $i, "=", $sum;
            echo "<br>";
        }
    ?>
</body>
</html>