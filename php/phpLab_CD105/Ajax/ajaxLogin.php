<?php
try{
  session_start();
  require_once("connectBooks.php");
  // $sql="select memName from member where memId=:memId and memPsw = :memPsw";
  $sql="select * from member where memId= :memId and memPsw= :memPsw";
  $member = $pdo -> prepare($sql);
  $member -> bindValue(":memId",$_REQUEST["memId"]);
  $member -> bindValue("memPsw",$_REQUEST["memPsw"]);
  $member -> execute();
  if( $member->rowCount()==0){ //查無此人
	  echo "查無此人";
  }else{ //登入成功
    //自資料庫中取回資料
    $memberRows=$member -> fetch(PDO::FETCH_ASSOC);
    
    // 將登入者資料寫入session
    $_SESSION["memNo"] = $memberRows["no"];
    $_SESSION["memId"] = $memberRows["memId"];
    $_SESSION["memName"] = $memberRows["memName"];
    $_SESSION["email"] = $memberRows["email"];
            
    //送出登入者的姓名資料
    echo $memberRows["memName"] ;

  }
}catch(PDOException $e){
  echo $e->getMessage();
}
?>