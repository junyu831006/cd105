<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
         .wrap{
            width: 960px;
            margin: auto;
            text-align:center; 
        }

        table{
            width: 198px;
            margin: auto;
            border-collapse: collapse;
        }

    </style>
</head>
<body>
    <?php
        
        if($_POST["income"]<=500000){
            $tax=$_POST["income"]*0.05;
        }
            elseif($_POST["income"]<=1130000){
                $tax=$_POST["income"]*0.12-35000;
            }
                elseif($_POST["income"]<=2260000){
                    $tax=$_POST["income"]*0.2-125400;
                }
                    elseif($_POST["income"]<=4230000){
                        $tax=$_POST["income"]*0.3-351400;
                    }
                        else{
                            $tax=$_POST["income"]*0.4-774400;
                        }
                        
    ?>

    <div class="wrap">
        <h3>Tax information</h3>
        <table border="1">
            <tr>
                 <td>Income</td>
                 <td>
                    <?php 
                            echo $_POST["income"];
                    ?>
                </td>
            </tr>
            <tr>
                <td>Tax</td>
                <td>
                    <?php 
                        echo $tax;
                    ?>
                </td>
            </tr>
        </table>
    </div>

</body>
</html>