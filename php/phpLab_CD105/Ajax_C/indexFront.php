<?php 
//檢查是否已登入
session_start();
if( isset($_SESSION["memName"]) ){
  $memName = $_SESSION["memName"];
}else{
  $memName = "";
}
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>董董購物網</title>
<link rel="stylesheet" type="text/css" href="jsLogin.css">
<link rel="icon" href="大頭照.jpg">
</head>

<body>
<!-- 燈箱：登入 -->
<div id="lightBox" style="display:none">
<table border="1" align="center" cellspacing="0" id="tableLogin">
<tr><td>帳號</td><td><input type="text" name="memId" id="memId"></td></tr>
<tr><td>密碼</td><td><input type="password" name="memPsw" id="memPsw"></td></tr>
<tr><td colspan="2" align="center">
        <input type="button" id="btnLogin" value="登入">
        <input type="button" id="btnLoginCancel" value="取消">
    </td></tr>
</table>
</div>

<!-- wrapper -->
<div id="wrapper">
<!-- 登入bar -->
<img src="大頭照.jpg">
<div id="bar" style="position: absolute;top:0;right: 20px">
<span id="memName"><?=$memName?></span>   <!-- 使用者姓名 -->
<span id="spanLogin"><?php echo ($memName == "") ? "登入" : "登出"; ?></span>
</div>

<div id="content">
<center><h1>這是首頁</h1></center>
</div>

<div id="footer"></div>

</div>
<script>

function $id(id){
	return document.getElementById(id);
}

function showLoginForm(){
  //檢查登入bar面版上 spanLogin 的字是登入或登出
  //如果是登入，就顯示登入用的燈箱(lightBox)
  //如果是登出
  //將登入bar面版上，登入者資料清空 
  //spanLogin的字改成登入
  //將頁面上的使用者資料清掉
  if($id('spanLogin').innerHTML == "登入"){
    $id('lightBox').style.display = 'block';
  }else{ //登出

    //清除登入者資訊
    var xhr = new XMLHttpRequest();
    xhr.onload = function(){
      if( xhr.status == 200){
        $id('memName').innerHTML = '&nbsp';
        $id('spanLogin').innerHTML = '登入';
      }else{
        alert( xhr.status );
      }
    }
    xhr.open("get", "ajaxLogout.php",true);
    xhr.send(null);
  }

}//showLoginForm


function sendForm(){
  //=====使用Ajax 回server端,取回登入者姓名, 放到頁面上 
  var xhr = new XMLHttpRequest();
  xhr.onload = function(){
    if( xhr.responseText == "error"){
      alert("帳密錯誤，請重新輸入");
    }else{
      $id("memName").innerHTML = xhr.responseText;
      //將登入表單上的資料清空，並隱藏起來
      $id('lightBox').style.display = 'none';
      $id('memId').value = '';
      $id('memPsw').value = '';
      $id('spanLogin').innerHTML = "登出";
    }
  }
  xhr.open("Post", "ajaxLogin.php", true);
  xhr.setRequestHeader("content-type", "application/x-www-form-urlencoded");
  xhr.send(`memId=${$id("memId").value}&memPsw=${$id("memPsw").value}`);   
}

function cancelLogin(){
  //將登入表單上的資料清空，並將燈箱隱藏起來
  $id('lightBox').style.display = 'none';
  $id('memId').value = '';
  $id('memPsw').value = '';
}

function init(){
  //===設定spanLogin.onclick 事件處理程序是 showLoginForm

  $id('spanLogin').onclick = showLoginForm;

  //===設定btnLogin.onclick 事件處理程序是 sendForm
  $id('btnLogin').onclick = sendForm;

  //===設定btnLoginCancel.onclick 事件處理程序是 cancelLogin
  $id('btnLoginCancel').onclick = cancelLogin;

}; //window.onload

window.addEventListener("load",init,false);

</script>
</body>
</html>
