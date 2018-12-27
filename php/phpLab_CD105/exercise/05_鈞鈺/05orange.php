<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>05orange.php</title>
    <style>
     h2 ,form{
        display: flex;
        justify-content: center;
        flex-wrap: wrap;
        width: 600px;
        margin: auto;
    }
    table{
            width: 300px;
        }
    
    table, tr, td{
        border: 1px solid black;
    }</style>
</head>
<body>
    <h2>您的消費資料為</h2>
    <?php

    $total = ($_POST["number"])*($_POST["price"]); 

    ?>
     
 
    <form>
    <table>
        <tr>
            <td>單價：</td>
            <td>
                <?php echo $_POST["price"]; ?>
            </td>
        </tr>
        <tr>
            <td>數量：</td>
            <td>
                <?php echo $_POST["number"]; ?>
            </td>
        </tr>
        <tr>
            <td>小計：</td>
            <td>
            <?php echo $total; ?>
            </td>
        </tr>
    </table>
    </form>
   
   
</body>
</html>