<?php
try{
  require_once("connectBooks.php");
  $sql = "select memName from member where memId=:memId";
  $member = $pdo -> prepare($sql);
  $member -> bindValue("memId" , $_REQUEST["memId"]);
  $member -> execute();
  if( $member->rowCount() !=0){
    echo "exist";
  }else{
    echo "ok";
  } 
}catch(PDOException $e){
  echo "error";
}
?>