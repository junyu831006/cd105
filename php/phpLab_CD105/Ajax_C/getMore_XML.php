<?php
try{
  require_once("connectBooks.php");
  $sql = "select * from member where memId=:memId";
  $member = $pdo->prepare( $sql );
  $member->bindValue(":memId", $_REQUEST["memId"]);
  $member->execute();
  
  if( $member->rowCount() == 0 ){//找不到
    echo "not found~";
  }else{//如果找得資料,將會員資料送出
    $memRow = $member->fetch(PDO::FETCH_ASSOC);
    //將各欄位內容串接起來
    $str = '<?xml version="1.0"?>';
    $str .= "<member>";
    $str .= "<帳號>{$memRow["memId"]}</帳號>";
    $str .= "<姓名>{$memRow["memName"]}</姓名>";
  	$str .= "<email>{$memRow["email"]}</email>";
  	$str .= "<tel>{$memRow["tel"]}</tel>";
  	$str .= "</member>";
	   header("content-type:text/xml");
    echo $str;
  }	
}catch(PDOException $e){
  echo $e->getMessage();
}
?>