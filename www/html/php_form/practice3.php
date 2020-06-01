<?php
	echo "<pre>";
	// <a href=""></a>

		// var_dump関数は連想配列の中身を確認する時に使用。<pre>タグは連想配列の出力を見やすくするために使用。
		// var_dumpはデータ型も確認できる。
		// $_POSTはPHPが自動で生成する連想配列。HTMLフォームのデータを自動で格納することができる。
		// 最初の段階ではキーがない連想配列。
		// HTMLのname属性の値が連想配列のキーの名前になる。
		var_dump($_POST);

	echo "</pre>";
?>

<!doctype html>
<html>

	<head>
		<meta charset="utf-8">
		<title>お問い合わせ</title>
	</head>

	<body>
		<!-- action属性の値にはフォームの送信先のURLを書く。今回は自分自身のファイルに送信している。
		[確認画面へ]ボタンがクリックされると、再度form3.phpがWebサーバ側で実行される -->
		<!-- method属性の値はHTTPプロトコルのメソッドを指定。 -->
		<form action="practice3.php" method="post">
			<table>

				<tr>
					<th>お名前</th>
					<td><input type="text" name="name"></td>
				</tr>

				<tr>
					<th>メールアドレス</th>
					<td><input type="text" name="email"></td>
				</tr>

				<tr>
					<th>お問い合わせの種類</th>
					<td>
						<select name="subject">
							<option value="お仕事に関するお問い合わせ">お仕事に関するお問い合わせ</option>
							<option value="その他お問い合わせ">その他お問い合わせ</option>
						</select>
					</td>
				</tr>

				<tr>
					<th>お問い合わせ内容</th>
					<td>
						<textarea name="body" cols="40" rows="10"></textarea>
					</td>
				</tr>

				<tr>
					<td colspan="2"><input type="submit" name="submit" value="確認画面へ"></td>
				</tr>
				
			</table>
		</form>
	</body>

</html>