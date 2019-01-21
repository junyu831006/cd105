<?php
try{
	sleep(1);
  require_once("connectBooks.php");
  $sql = "select memName from member where memId = :memId";
  $member = $pdo->prepare($sql);
  $member->bindValue(":memId", $_REQUEST["memId"]);
  $member->execute();
  if( $member->rowCount() !=0){
    echo "帳號已存在，不可使用此帳號";
  }else{
    echo "可使用此帳號";
  } 
}catch(PDOException $e){
  echo $e->getMessage();	
  // echo "error";
}
?>