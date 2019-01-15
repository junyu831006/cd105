<?php 
session_start();
$psn = $_REQUEST["psn"];
if( isset($_REQUEST["btnUpdate"])=== true){ //修改
	$_SESSION["qty"][$psn]= $_REQUEST["qty"];
}else{ //delete
	unset($_SESSION["pname"][$psn]);
	unset($_SESSION["price"][$psn]);
	unset($_SESSION["qty"][$psn]);
}
header("Location:cartShow.php");
?>