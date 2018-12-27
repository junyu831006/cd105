<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
    table{
        border-collapse: collapse;
    }
    td{
        text-align: center;
    }
    </style>
</head>
<body>
    <?php
        echo "<table border=1>";
        for ($i=1; $i<=10; $i++){
            if ($i%2 == 1){
                echo "<tr>";
                echo "<td width=50> $i </td>";
            }
            elseif ($i%2 == 0){
                echo "<td width=50> $i </td>";
                echo "</tr>";
            }
        }
    ?>
</body>
</html>