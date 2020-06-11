<?php
  session_start();

    if(isset($_SESSION['name'])) {

      $name = $_SESSION['name'];
      $email = $_SESSION['email'];
      $subject = $_SESSION['subject'];
      $body = $_SESSION['body'];
    }

    // openssl_random_pseudo_bytes関数は、擬似乱数のバイト文字列を生成する
    // base64_encode関数はMIMEbase64方式でデータをエンコードする関数
    // SESSION['token]にランダムな文字列が代入される
    $_SESSION['token'] = base64_encode(openssl_random_pseudo_bytes(48));
    $token = htmlspecialchars($_SESSION['token'], ENT_QUOTES);

?>

<!doctype html>
<html>
  <head>
  <meta charset="utf-8">
  </head>
  <body>
    <form action="practice8.php" method="post">
    <input type="hidden" name="token" value="<?php echo $token ?>">
      <table>

        <tr>
          <th>お名前</th>
          <td><?php echo $name; ?></td>
        </tr>

        <tr>
          <th>メールアドレス</th>
          <td><?php echo $email; ?></td>
        </tr>

        <tr>
          <th>お問い合わせの種類</th>
          <td><?php echo $subject; ?></td>
        </tr>

        <tr>
          <th>お問い合わせ内容</th>
          <td><?php echo $body; ?></td>
        </tr>

        <tr>
          <td colspan="2"><input type="submit" name="submit" value="送信する"></td>
        </tr>

      </table>
    </form>
    <!-- URLパラメータ。URLの後ろにデータをつける。パラメータの値は＄_GETの連想配列に格納される。
    $_GETにはactionというキーができ、値はeditが格納される。 -->
    <p><a href="practice6.php?action=edit">入力画面へ戻る</a></p>
  </body>
</html>