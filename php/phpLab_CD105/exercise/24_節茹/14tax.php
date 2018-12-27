<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
    table{
        border-collapse: collapse;
    }
    td{
        text-align: center;
        padding: 5px;
    }
    </style>
</head>
<body>
    <table border="1">
        <caption>100年度綜合所得稅速算公式</caption>
        <thead>
            <tr>
                <td>級別</td>
                <td>級距</td>
                <td>稅率</td>
                <td>累進稅差</td>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>0~500,000元</td>
                <td>5%</td>
                <td>0</td>
            </tr>
            <tr>
                <td>2</td>
                <td>500,001~1,130,000元</td>
                <td>12%</td>
                <td>35,000元</td>
            </tr>
            <tr>
                <td>3</td>
                <td>1,130,001~2,260,000元</td>
                <td>20%</td>
                <td>125,400元</td>
            </tr>
            <tr>
                <td>4</td>
                <td>2,260,001~4,230,000元</td>
                <td>30%</td>
                <td>351,400元</td>
            </tr>
            <tr>
                <td>5</td>
                <td>4,230,001元以上</td>
                <td>40%</td>
                <td>774,400元</td>
            </tr>
        </tbody>
    </table>

    <?php
        $tax=0;
        if(0 <= $_GET['moneyEarn'] && $_GET['moneyEarn']<= 500000){
            $tax = $_GET['moneyEarn']*0.05;            
        }elseif(500000 < $_GET['moneyEarn'] && $_GET['moneyEarn']<= 1130000){
            $tax = $_GET['moneyEarn']*0.12-35000;
        }elseif(1130000<$_GET['moneyEarn'] && $_GET['moneyEarn']<=2260000){
            $tax= $_GET['moneyEarn']*0.20-125400;
        }elseif(2260000<$_GET['moneyEarn'] && $_GET['moneyEarn']<=4230000){
            $tax= $_GET['moneyEarn']*0.30-351400;
        }elseif($_GET['moneyEarn']>4230000){
            $tax= $_GET['moneyEarn']*0.40-774400;
        }else{
            $tax="無法計算，請輸入正確資料";
        }
        echo "您的綜合所得淨額為{$_GET['moneyEarn']}元 <br>";
        echo "今年所需繳納的稅額為{$tax}元";
    ?>
</body>
</html>