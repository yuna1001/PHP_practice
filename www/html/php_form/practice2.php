<!-- 入力フォーム（form）のPractice -->
<?php
  $form = array();
  // $form = array();は連想配列を定義する。この時点ではキー(インデックス)はまだない。
  $form['subject'] = "お仕事に関するお問い合わせ";
  // 連想配列にキーが追加される。キーに紐づく形でデータが格納される。
  // キーは任意の名前で複数追加できる。
  $form['body'] = "お見積の件で、連絡をしました。";
?>

<!doctype html>
<html>
  <head>
    <meta charset="utf-8">
    <title>お問い合わせ</title>
  </head>
  <body>
    <h1><?php echo $form['subject'] ?></h1>
    <p><?php echo $form['body'] ?></p>
  </body>
</html>
