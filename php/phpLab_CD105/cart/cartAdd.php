<?php 
session_start();
// $_SESSION["psn"] = $_REQUEST["psn"];
//透過查詢psn（書號）來當session中的key
$psn = $_REQUEST["psn"];
//以其他欄位當作二維陣列的主空間，透過cartShow.php以$psn（書號）當索引，先找出$psn對應到的$pname，在找出剩下欄位中對應到的$psn（書號）
$_SESSION["pname"][$psn] = $_REQUEST["pname"];
$_SESSION["price"][$psn] = $_REQUEST["price"];
$_SESSION["author"][$psn] = $_REQUEST["author"];
$_SESSION["qty"][$psn] = 1;
header("Location:cartShow.php");
?>