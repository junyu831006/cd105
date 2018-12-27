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
        $amount=$_POST["price"]*$_POST["qty"];
    ?>


    <div class="wrap">
        <h3>您的消費資料為</h3>
        <table border="1">
            <tr>
                <td>單價</td>
                <td>
                    <?php 
                        echo $_POST["price"];
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