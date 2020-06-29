<?php
session_start();

?>

<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>form</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
</head>
<style>
body{
  /* max-width:800px; */
  background-color:#330099;
  color:white;
  position: absolute; top:130px; left:500px
}
.form-control{
  border: 4px solid #A16EFF;
}
#kakunin{
  font-size:20px;
}

</style>

<body>
  <h1>お問い合わせフォーム</h1>
  <form action="check.php" method="post">
     <span>氏名：</span>
        <input type="text" name="name" placeholder="例)山田太郎" class="form-control" value="<?php echo $_SESSION['name'] ?>"><br>
     <span>メールアドレス：</span>
        <input type="text" name="address" placeholder="例)○○○○@○○○○.jp" class="form-control" value="<?php echo $_SESSION['address'] ?>"><br>
     <span>お問い合わせ：</span><br>
        <textarea name="text"cols="50" rows="10" class="form-control" placeholder="例)僕のメガネ知りませんか？" ><?php echo $_SESSION['text'] ?></textarea><br>
        <input type="submit" class="btn btn-primary" value="確認">
  </form>
</body>
</html>