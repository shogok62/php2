<?php

function h($str)
{
  return htmlspecialchars($str, ENT_QUOTES);
}


//1.  DB接続します
try {
  //Password:MAMP='root',XAMPP=''
  $pdo = new PDO('mysql:dbname=gs_hw_1216;charset=utf8;host=localhost','root','');
} catch (PDOException $e) {
  exit('DBConnectError:'.$e->getMessage());
}

//２．データ取得SQL作成
$stmt = $pdo->prepare("SELECT * FROM gs_hw_1216_t;");
$status = $stmt->execute();

//３．データ表示
$view="";
if ($status==false) {
    //execute（SQL実行時にエラーがある場合）
  $error = $stmt->errorInfo();
  exit("ErrorQuery:".$error[2]);

}else{
  //elseの中は、SQL実行成功した場合
  //Selectデータの数だけ自動でループしてくれる
  //$stmt->fetch()　は一行セレクト（情報を収集）すること
  // resultの中身はとるデータの内容（例えば、'name'とか'email'）
  // [.=]の意味は、データを追加する為。
  //FETCH_ASSOC=http://php.net/manual/ja/pdostatement.fetch.php
  while( $result = $stmt->fetch(PDO::FETCH_ASSOC)){
    $view .= '<p>' . '<li>' . $result['ユニーク値'] . ' / ' . h($result['書籍名']) . ' / ' . h($result['書籍URL']) .' / ' . h($result['書籍コメント']) . ' / ' . $result['登録日時'] . '</li>'.'</p>' ;
  }

}
?>


<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>読書記録表示</title>
<link rel="stylesheet" href="css/range_hw.css">
<link href="css/bootstrap.min_hw.css" rel="stylesheet">
<style>div{padding: 10px;font-size:16px;}</style>
</head>
<body id="main">
<!-- Head[Start] -->
<header>
  <nav class="navbar navbar-default">
    <div class="container-fluid">
      <div class="navbar-header">
      <a class="navbar-brand" href="index_hw.php">データ登録</a>
      </div>
    </div>
  </nav>
</header>
<!-- Head[End] -->

<!-- Main[Start] -->
<div>
    <div class="container jumbotron"><?= $view ?></div>
</div>
<!-- Main[End] -->

</body>
</html>
