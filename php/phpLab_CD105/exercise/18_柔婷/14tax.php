<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	 <table border="1"  cellspacing="0">
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
        echo $_GET['money'],"<br>";
    	$tax=0;
        if(0 <= $_GET['money'] && $_GET['money']<= 500000){
            $tax = $_GET['money']*0.05;            
        }elseif(500000 < $_GET['moneyEarn'] && $_GET['money']<= 1130000){
            $tax = $_GET['money']*0.12-35000;
        }elseif(1130000<$_GET['money'] && $_GET['money']<=2260000){
            $tax= $_GET['money']*0.20-125400;
        }elseif(2260000<$_GET['money'] && $_GET['money']<=4230000){
            $tax= $_GET['money']*0.30-351400;
        }elseif($_GET['money']>4230000){
            $tax= $_GET['money']*0.40-774400;
        }else{
            $tax="算不出，別亂輸入資料";
        }
        echo "您的綜合所得淨額為{$_GET['money']}元, <br> ";
        echo "今年所需繳納的稅額為{$tax}元";
    ?>





     
	
</body>
</html>