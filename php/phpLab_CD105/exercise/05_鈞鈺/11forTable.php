<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>作業十一　：(迴圈 for…練習) </title>
    <style>
        table{
            width: 600px;
        }
    
    table, tr, td{
        border: 1px solid black;
        border-collapse: collapse;
        padding: 5px 10px;
    }
    </style>
</head>
<body>
    <?php
    echo "<table>";
    for($i=1 ; $i<10 ; $i+=2){
    echo "<tr>";
    echo "<td>",$i,"</td>";
    echo "<td>",($i+1),"</td>";
    echo "</tr>";
    }
    echo "</table>";
    ?>
</body>
</html>