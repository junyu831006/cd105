<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Examples</title>
</head>
<body>

<?php
foreach($_FILES["upFile"]["error"] as $i => $data){
	switch( $_FILES["upFile"]["error"][$i] ){
		case 0:
			//檢查是否有images資料夾
			if( file_exists("images") === false){
				//建立資料夾 make directory
				mkdir("images");
			}

			$from = $_FILES['upFile']['tmp_name'][$i];
			$to = "images//{$_FILES['upFile']['name'][$i]}";
			copy($from, $to);
			echo "OK";
			break;
		case 1:
			echo "上傳檔案太大,不得超過: ", ini_get("upload_max_filesize"), "<br>";
			break;
		case 2:
			echo "上傳檔案太大 <br>";
			break;
		case 3:
			echo "上傳資料有問題，請重送<br>";
			break;
		case 4:
		echo "未選檔案<br>";
			break;
		default : 
			echo "['error']: " , $_FILES['upFile']['error'][$i] , "<br>";
	}//switch
}//foreach
// echo "['error']: " , $_FILES['upFile']['error'] , "<br>";
// echo "['name']: " , $_FILES['upFile']['name'] , "<br>";
// echo "['tmp_name']: " , $_FILES['upFile']['tmp_name'] , "<br>";
// echo "['type']: " , $_FILES['upFile']['type'] , "<br>";
// echo "['size']: " , $_FILES['upFile']['size'] , "<br>";
?>

</body>
</html>