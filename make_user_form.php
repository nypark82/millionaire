<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <link rel="stylesheet" href="css/make_user_form.css">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>ユーザー登録画面</title>
</head>
<body>
<h1>ユーザー登録フォーム<a href="login.php">管理者メニュー</a></h1>
	<form action="top.php" method="post">
		<dl>
				<dd><input type="text" name="u_name" id="u_name" placeholder="氏名" required></dd>
				<dd><input type="text" name="mail" id="mail" placeholder="メーアドレス" required></dd>
		</dl>
		<button class="edit_btn" type="submit"><span>登録</span></button>
	</form>
</body>
</html>