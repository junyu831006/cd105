<?php
$total=0;
$price=$_POST['tax'];
if($price<=50000)
	$total=$price*1.05;
elseif ($price>=50001&&$price<=1130000) {
	$total=$price*1.12-3500;
}
elseif ($price>=1130001&&$price<=2260000) {
	$total=$price*1.20-125400;
}
elseif ($price>=2260001&&$price<=4230000) {
	$total=$price*1.30-351400;
}
elseif($price>=4230001){
	$total=$price*1.40-774400;
}
echo "金額:$total";
?>
