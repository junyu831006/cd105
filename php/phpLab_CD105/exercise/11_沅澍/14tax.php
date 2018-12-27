<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>14tax</title>
</head>
<body>
	<?php 
	$income=$_GET["income"];

	if ($income <= "500000") {
		$level="1";
		$tax="0.05";
		$minus="35000";
		echo "綜合所得稅級別為第{$level}級<br>您的所得稅率為{$tax}<br>累進稅差為{$minus}<br>";
		echo "您應繳的稅額為",$income*$tax,"元";
		}
	elseif ($income<="1130000") {
		$level="2";
		$tax="0.12";
		$minus="35000";
		echo "綜合所得稅級別為第{$level}級<br>您的所得稅率為{$tax}<br>累進稅差為{$minus}<br>";
		echo "您應繳的稅額為",$income*$tax-$minus,"元";
	}
	elseif ($income<="2260000") {
		$level="3";
		$tax="0.20";
		$minus="125400";
		echo "綜合所得稅級別為第{$level}級<br>您的所得稅率為{$tax}<br>累進稅差為{$minus}<br>";
		echo "您應繳的稅額為",$income*$tax-$minus,"元";
	}
	elseif ($income<="4230000") {
		$level="4";
		$tax="0.30";
		$minus="351400";
		echo "綜合所得稅級別為第{$level}級<br>您的所得稅率為{$tax}<br>累進稅差為{$minus}<br>";
		echo "您應繳的稅額為",$income*$tax-$minus,"元";
	}
	else{
		$level="5";
		$tax="0.40";
		$minus="774400";
		echo "綜合所得稅級別為第{$level}級<br>您的所得稅率為{$tax}<br>累進稅差為{$minus}<br>";
		echo "您應繳的稅額為",$income*$tax-$minus,"元";

	}

	 ?>
</body>
</html>