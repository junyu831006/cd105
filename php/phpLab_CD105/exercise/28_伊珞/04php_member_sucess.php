<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>php_member_sucess</title>
	<style type="text/css">
		.form_get{
			text-align: center;
			width: 600px;
			margin: auto;
		}
		.table{
			background-color: #fafafa;
			padding: 5px;
			margin-top: 20px;
		}
		td{
			padding: 10px;
			width: 300px;
			background-color: #F1F1F1;
		}
	</style>
</head>
<body>
	<div class="form_get">
		<p>您的會員資料為：</p>
		<table class="table">
		<tr>
			<td>帳號：</td>
			<td><?php echo "",$_GET["id"];?></td>
		</tr>
		<tr>
			<td>密碼：</td>
			<td><?php echo $_GET["pass_word"];?></td>
		</tr>
		<tr>
			<td>email：</td>
			<td><?php echo $_GET["email"];?></td>
		<tr>
			<td>性別：</td>
			<td><?php echo $_GET["gender"];?></td>
		</tr>
		<tr>
			<td>生日：</td>
			<td><?php echo $_GET["birthday"];?></td>
		</tr>
		<tr>
			<td>聯絡電話：</td>
			<td><?php echo $_GET["phone_number"];?></td>
		</tr>
	</div>
</body>
</html>