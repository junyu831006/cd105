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



    $w = 6;
    $t = $w - 1;
    for ($v = 1; $v <= ($w * 2) - 1; $v++) {
        if ($v <= $w) {
            for ($u = 1; $u <= $v; $u++) {
                echo "*";
            }
        } else {

            for ($r = 1; $r <= $t; $r++) {
                echo "*";
            }
            $t--;
        }

        echo "<br>";
    }

    ?>
    
</body>
</html>