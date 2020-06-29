<?php 
session_start();
if(isset($_POST['name']) && $_POST['name']){
  $_SESSION['name'] = $_POST['name'];
}
if(isset($_POST['address']) && $_POST['address']){
  $_SESSION['address'] = $_POST['address'];
}
if(isset($_POST['text']) && $_POST['text']){
  $_SESSION['text'] = $_POST['text'];
}

?>
<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
  <style>
  .wrap{
    word-break : break-all;
  }
  </style>
</head>
<body>
<div class="jumbotron">
  <h1>確認画面</h1>
  <form action="send.php">
  <p>名前：<?php echo $_SESSION['name']; ?></p>
  <p>メールアドレス：<?php echo $_SESSION['address'] ?></p>
  <p class="wrap">お問い合わせ内容：<?php echo $_SESSION['text'] ?></p>
  <a href="form2.php"　class="btn btn-primary">戻る</a>
  <input type="submit" class="btn btn-primary">
  </form>
  </div>
</body>
</html>