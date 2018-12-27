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
        if($_POST["level"]==1){
            if($_POST["qty"]<40){
                $price=30;
            }
                elseif($_POST["qty"]>=100){
                    $price=20;
                }
                    elseif($_POST["qty"]<100){
                        $price=25;
                    }
        }
            elseif($_POST["level"]==2){
                if($_POST["qty"]<40){
                    $price=25;
                }
                    elseif($_POST["qty"]>=100){
                        $price=15;
                    }
                        elseif($_POST["qty"]<100){
                            $price=20;
                        }
            }
                elseif($_POST["level"]==3){
                    if($_POST["qty"]<40){
                        $price=20;
                    }
                        elseif($_POST["qty"]>=100){
                            $price=10;
                        }
                            elseif($_POST["qty"]<100){
                                $price=15;
                            }
                }
        
        $amount=$_POST["qty"]*$price;
    ?>

    <div class="wrap">
        <h3>您的消費資料為</h3>
        <table border="1">
            <tr>
                 <td>等級</td>
                 <td>
                    <?php 
                            echo $_POST["level"];
                    ?>
                </td>
            </tr>
            <tr>
                <td>數量</td>
                <td>
                    <?php 
                        echo $_POST["qty"];
                    ?>
                </td>
            </tr>
            <tr>
                <td>單價</td>
                <td>
                    <?php 
                        echo "$price";
                    ?>
                </td>
            </tr>
            <tr>
                <td>小計</td>
                <td>
                    <?php 
                        echo $amount;
                    ?>
                </td>
            </tr>
        </table>
    </div>

</body>
</html>