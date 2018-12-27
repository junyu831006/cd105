<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <style>
        table{
            border:8px #FFD382 groove;
            
        }
        td{
            width:50px
        }
    </style>
    <title>Document</title>
</head>
<body>
<table border="1">
    <?php 
        $a=1;
        
            for($i=1;$i<=5;$i++)
            {
                echo "<tr>","</tr>";
                for ($j=1; $j <=2; $j++) 
                { 	
                    echo "<td>",$a,"</td>";
                    $a++;
                }
            }
            
        

    ?>
    </table>
</body>
</html>