<?php 
session_start();
$errMsg = "";
//if是判斷購物車裡頭是否有商品，如果沒有的話->session應該沒有pname
if( isset($_SESSION["pname"])===false or count($_SESSION["pname"]) === 0){
	echo"購物車是空ㄉ";
	
}else{
	//判斷是否是會員
	if(isset($_SESSION["memId"])===false){
		echo"請登入會員";
		$errMsg = "<script>window.alert('尚未登入, 請登入');location.href='login.html';</script>";
		
	}else{
		try {
		//連線
		require_once("connectBooks.php");
		$orderMemNo = 1;
		$orderTime = date("Y-m-d" );
		$email = $_SESSION["email"];
		//啟動一個交易
		$pdo->beginTransaction();
	
		//寫回訂單主單
		//INSERT INTO `bookorder` (`orderNo`, `orderMemNo`, `orderTime`, `email`, `payStatus`)
		
		$sql = "INSERT INTO bookorder (orderNo, orderMemNo, orderTime, email, payStatus)
				VALUES(null,:orderMemNo,now() ,:email,'0')";
				//  VALUES(8,'1',$orderTime ,'jjjj','0')";
		$bookorder = $pdo->prepare($sql);
		$bookorder->bindValue(":orderMemNo",$orderMemNo);
		$bookorder->bindValue(":email",$email);
		$bookorder->execute();
		
		//取回orderNo , $pdo->lastInsertId();
		$orderNo = $pdo->lastInsertId();
	
		//寫回訂單明細
		//INSERT INTO `orderitems` (`orderNo`, `productNo`, `quantity`)
		$sql= "INSERT INTO orderitems(orderNo,productNo,quantity)
			VALUES ($orderNo,:productNo,:quantity)";
		$orderitems= $pdo->prepare($sql);
		foreach( $_SESSION["qty"] as $psn => $qty){
		$orderitems->bindValue(":productNo",$psn);
		$orderitems->bindValue(":quantity",$qty);
		$orderitems->execute();	
		}
		$pdo->commit();
		unset($_SESSION["pname"]);
		unset($_SESSION["price"]);
		unset($_SESSION["qty"]);
		echo "下單成功, 您的訂單編號為 : $orderNo <br>";
		
		//檢查是否從別支程式轉來	
		if( isset($_SESSION["where"]) === true){
        	$to = $_SESSION["where"];
        	unset( $_SESSION["where"]);
        	header("location:$to");
		}	
	}catch(PDOException $e){
		$errMsg .= "錯誤原因 : ".$e -> getMessage(). "<br>";
		$errMsg .= "錯誤行號 : ".$e -> getLine(). "<br>";
		$pdo->rollBack();
	}
	}
}



?>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title></title>

</head>
<body>
<?php 
if($errMsg !=""){
    echo $errMsg;
}else{
    echo "good";
}

?>

<a href="prodList.php">前往商品專區</a>  
</body>
</html>