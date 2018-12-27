<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        table{
            text-align: center;
            margin: auto;
        }
        td{
            width: 300px;
            background-color: #fcc;
        }
    </style>
</head>
<body>
    <table border="1" cellspacing="0"">
<?php
for($i=1;$i<=10;$i++){
    if($i % 2 ==1){
        echo"<tr><td>$i</td>";
    }if($i % 2 ==0){
        echo"<td>$i</td></tr>";
    }
    }
?>
        
    </table>   
</body>
</html>