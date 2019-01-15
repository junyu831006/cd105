<?php 
session_start();
$_SESSION["psn"] = $_REQUEST["psn"];
$_SESSION["pname"] = $_REQUEST["pname"];
$_SESSION["price"] = $_REQUEST["price"];
$_SESSION["qty"] = 1;
header("Location:cartShow.php");
?>