<?php
  session_start();

  if(isset($_POST['token'], $_SESSION['token']) && ($_POST['token'] === $_SESSION['token'])) {
    unset($_SESSION['token']);
    $dsn = 'mysql:dbname=contact_form;host=192.168.96.2;charset=utf8';
    $user = 'root';
    $password = 'secret';

    $dbh = new PDO($dsn, $user, $password);
    var_dump($dbh);
    $dbh = null;

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