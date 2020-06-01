<!-- 変数代入のPractice -->

<?php
  $subject = "お仕事に関するお問い合わせ";
  // $は変数の代入に使用
  $body = "お見積もりの件で、連絡をしました。";

  $body2 = $body;
  // 変数から変数へコピーできる

  $body = "";
  // 変数の上書きができる。この時代入先の変数($body2)には影響なし。
?>

<!doctype html>
<html>
  <head>
    <meta charset="utf-8">
    <title>お問い合わせ</title>
  </head>
  <body>
    <h1><?php echo $subject ?></h1>
    <!-- echoは変数の出力(文字列) -->
    <p><?php echo $body2 ?></p>
  </body>
</html>