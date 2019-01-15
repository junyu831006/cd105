<?php 
session_start();
$errMsg = "";
if( isset($_SESSION["pname"])===false or count($_SESSION["pname"])===0 ){
	$errMsg =  "<center>購物車是空的唷</center>";
}else{
	//檢查是否已登入
	if( isset($_SESSION["memId"])===false){ //尚未登入
		//$errMsg = "尚未登入, 請<a href='login.html'>登入</a>";
		$_SESSION["where"] = $_SERVER["PHP_SELF"];
		$errMsg = "<script>window.alert('尚未登入, 請登入');location.href='login.html';</script>";
	}else{ //已登入,將購物資料寫回資料庫
		try {
			//連線
			require_once("connectBooks.php");
			
			$orderMemNo = $_SESSION["memNo"];
			$email = $_SESSION["email"];
			// $orderTime = date("Y-m-d H:i:s");
			//啟動一個交易
			$pdo->beginTransaction();

			//寫回訂單主單
			//INSERT INTO `bookorder` (`orderNo`, `orderMemNo`, `orderTime`, `email`, `payStatus`) value (...........)
			$sql = "INSERT INTO bookorder (orderNo, orderMemNo, orderTime, email, payStatus) values ( null, :orderMemNo, now(), :email, '0' )";
			$bookorder = $pdo->prepare( $sql );
			$bookorder->bindValue( ":orderMemNo", $orderMemNo);
			$bookorder->bindValue( ":email", $email);
			$bookorder->execute();

			//取回orderNo , $pdo->lastInsertId();
			$orderNo = $pdo->lastInsertId();

			//寫回訂單明細
			//INSERT INTO `orderitems` (`orderNo`, `productNo`, `quantity`)
			$sql = "INSERT INTO orderitems (orderNo, productNo, quantity) values($orderNo, :productNo, :quantity)";
			$orderitems = $pdo->prepare($sql);
			foreach( $_SESSION["qty"] as $psn => $qty){
				$orderitems->bindValue(":productNo", $psn);
				$orderitems->bindValue(":quantity", $qty);
				$orderitems->execute();
			}
			$pdo->commit();
			unset($_SESSION["pname"]);
			unset($_SESSION["price"]);
			unset($_SESSION["qty"]);
			$errMsg = "下單成功, 您的訂單編號為 : $orderNo <br>";			
		}catch(PDOException $e){
		  $errMsg .= "錯誤原因 : ".$e -> getMessage(). "<br>";
		  $errMsg .= "錯誤行號 : ".$e -> getLine(). "<br>";
		  echo $errMsg;
		  $pdo->rollBack();
		}
	}//end 檢查是否己登入


}

?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Examples</title>
<style type="text/css">
h2 {
	color:deeppink;
}	
td {
	border-bottom:1px dotted deeppink;
}
a {
	text-decoration:none;
}
a:hover {
	text-decoration:underline;
}
</style>
</head>
<div><?php echo $errMsg; ?></div><br>
<center>
	<a href="prodList.php">繼續瀏覽</a><br>
</center>