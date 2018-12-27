<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>04memberShow</title>
    <style>
    h2, table{
        margin: 0 auto;
        text-align: center;
    }
    h2{
        padding: 10px;
    }
    table, th, td{
        border: 1px solid gray;
    }
    th{
        background-color: pink;
    }
    th, td{
        padding: 5px;
    }
    td{
        width: 200px;
    }
    </style>
</head>
<body>
    <h2>您的資料為</h2>
    <table>
        <tr>
            <td>姓名</td>
            <td>
                <?php echo $_POST["memName"]; ?>
            </td>
        </tr>
        <tr>
            <td>帳號</td>
            <td>
                <?php echo $_POST["memId"]; ?>
            </td>
        </tr>
        <tr>
            <td>密碼</td>
            <td>
                <?php echo $_POST["memPsw"]; ?>
            </td>
        </tr>
        <tr>
            <td>e-mail</td>
            <td>
                <?php echo $_POST["email"]; ?>
            </td>
        </tr>
        <tr>
            <td>性別</td>
            <td>
                <?php echo $_POST["sex"]; ?>
            </td>
        </tr>
        <tr>
            <td>生日</td>
            <td>
                <?php echo $_POST["birthday"]; ?>
            </td>
        </tr>
        <tr>
            <td>聯絡電話</td>
            <td>
                <?php echo $_POST["tel"]; ?>
            </td>
        </tr>
    </table>
</body>
</html>