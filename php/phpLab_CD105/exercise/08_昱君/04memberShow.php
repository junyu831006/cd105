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
        }   
        .wrap{
            width: 960px; 
            margin: auto;
            text-align: center;
            
        }
        .wrap table{
            width: 350px;
            margin: auto;
        }

    </style>

</head>
<body>
    <div class="wrap">
        您的會員資料為
        <table border="1">
            <tr>
                <td>姓名</td>
                <td> <?php echo $_POST["memName"] ?></td>
            </tr>
            <tr>
                <td>帳號</td>
                <td><?php echo $_POST["memId"] ?></td>
            </tr>
            <tr>
                <td>密碼</td>
                <td><?php echo $_POST["memPsw"] ?></td>
            </tr>
            <tr>
                <td>e-mail</td>
                <td><?php echo $_POST["email"] ?></td>
            </tr>
            <tr>
                <td> 性別</td>
                <td><?php echo $_POST["sex"] ?></td>
            </tr>
            <tr>
                <td>生日</td>
                <td><?php echo $_POST["birthday"] ?></td>
            </tr>
            <tr>
                <td>聯絡電話</td>
                <td><?php echo $_POST["tel"] ?></td>
            </tr>
        </table>
    </div>

</body>
</html>