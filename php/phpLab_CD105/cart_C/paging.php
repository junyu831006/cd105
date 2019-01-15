<?php
try {
   	//連線

   	//每頁要顯示幾筆($recPerPage: 2)

   	//取得總筆數($totalRec : 7)

   	//計算共幾頁($pages : ceil($totalRec/$recPerPage) )

	//決定目前是顯示哪一頁

	//取回目前這一頁的資料, 先算出start
	// select .... from table limit $start, $recPerPage

   } catch (Exception $e) {
   	
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
</style>
</head>
<body>
<!-- 顯示目前這一頁 -->

<!-- 顯示各頁的超連結 -->

</body>
</html>