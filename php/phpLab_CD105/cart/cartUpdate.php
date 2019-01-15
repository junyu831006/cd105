<?php
session_start();
$psn = $_REQUEST["psn"];
if(isset($_REQUEST["btnUpdate"]) === true){
    $_SESSION["qty"][$psn] = $_REQUEST["qty"];
}else{
    unset ($_SESSION["pname"][$psn]);
    unset ($_SESSION["price"][$psn]);
    unset ($_SESSION["author"][$psn]);
}

header("Location:cartShow.php");
?> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

</body>
</html>