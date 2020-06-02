<?php
  echo "<pre>";
    var_dump($_POST);
  echo "</pre>";

  // 連想配列を定義
  $errors = array();

  // isset関数は変数や連想配列がセットされており、値がNULLでないかを確認する。NULLであればtrueを返す。
  // $_POST['submit']のデータを関数に渡す。
  if(isset($_POST['submit'])) {
  
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $body = $_POST['body'];
    
    if($name === "") {
      $errors['name'] = "お名前が入力されていません。";
    }
    
    if($email === "") {
      $errors['email'] = "メールアドレスが入力されていません。";
    }
    
    if($body === "") {
      $errors['body'] = "お問い合わせ内容が入力されていません。";
    }
    
  }

  echo "<pre>";
  var_dump($errors);
  echo "</pre>";
  ?>

<!doctype html>
<html>
  <head>
    <meta charset="utf-8">
    <title>お問い合わせ</title>
  </head>
  <body>

  <?php
    echo "<ul>";
      // foreachは制御構造の一つ。
      // 制御構造とは、特定の条件に基づいて、特定の行を繰り返し実行させたり、特定の行をとばすことができる。
      // foreachは、配列のキーとキーに対応する値を先頭から自動で取り出して特定の処理を繰り返し行うことができる。
      // また、連想配列のキーの数だけ、自動でループ処理を行い、配列を取り出すことができる。
      // foreach(配列 as 変数) {文} という形。
      foreach($errors as $value) {
        echo "<li>";
          echo $value;
        echo "</li>";
      }
    echo "</ul>";
  ?>

    <form action="practice4.php" method="post">
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