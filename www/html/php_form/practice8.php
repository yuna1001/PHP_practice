<?php
  session_start();

  if(isset($_POST['token'], $_SESSION['token']) && ($_POST['token'] === $_SESSION['token'])) {
    unset($_SESSION['token']);
    echo "きちんとしたアクセスです";
  }else{
    header('Location: http://localhost:8080/php_form/practice6.php');
    exit();
  }
?>

<!doctype html>
<html>
  <head>
    <meta charset="utf-8">
    <title>完了画面 - お問い合わせ</title>
  </head>
  <body>
    <p>お問い合わせありがとうございます。</p>
  </body>
</html>