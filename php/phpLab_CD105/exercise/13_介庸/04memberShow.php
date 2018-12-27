<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <style>
        body{
            background-color:lightblue;
            
        }
        h1{
            text-align: center;
            font-size: 36px;
        }
        table{
            width: 600px;
            height: 250px;
            margin:auto;
            text-align: center;
            font-size:32px;
        }

    </style>
    <title>Document</title>
</head>
<body>
    <h1>您的會員資料拉</h1>
    <table border="1">
    <tr>
                <td>姓名</td>
                <td>
                    <?php echo $_POST["memName"] ?>
                </td>
            </tr>
            <tr>
                <td>帳號</td>
                <td> <?php echo $_POST["memId"] ?></td>
            </tr>
            <tr>
                <td>密碼</td>
                <td>
                    <?php echo $_POST["memPsw"] ?>
                </td>
            </tr>
            <tr>
                <td>e-mail</td>
                <td>
                      <?php echo $_POST["email"] ?>
                </td>
            </tr>
            <tr>
                <td>性別</td>
                <td>
                    <?php
                             
                    
                    switch($_POST["sex"]){
                    
                        case "1":
                        echo "男";
                        break;
                        case "2":
                        echo "女";
                        break;
                    }
                     ?>
                </td>
            </tr>
            <tr>
                <td>生日</td>
                <td>
                     <?php echo $_POST["birthday"] ?>
                </td>
            </tr>
            <tr>
                <td>連絡電話</td>
                <td>
                    <?php echo $_POST["tel"] ?>
                </td>
            </tr>
    </table>
</body>
</html>