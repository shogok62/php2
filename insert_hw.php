<?php

/**
 * 1. index.phpのフォームの部分がおかしいので、ここを書き換えて、
 * insert.phpにPOSTでデータが飛ぶようにしてください。
 * 2. insert.phpで値を受け取ってください。
 * 3. 受け取ったデータをバインド変数に与えてください。
 * 4. index.phpフォームに書き込み、送信を行ってみて、実際にPhpMyAdminを確認してみてください！
 */

//1. POSTデータ取得

$書籍名 = $_POST['書籍名'];
$書籍URL = $_POST['書籍URL'];
$書籍コメント = $_POST['書籍コメント'];




//2. DB接続します  
// 下の5行は基本コピペ ：　トライして（エラーしたら）キャッチして（処理としてメッセージとか出しつつ）エグジットしてください
try {
  //ID:'root', Password: xamppは 空白 ''
  $pdo = new PDO('mysql:dbname=gs_hw_1216;charset=utf8;host=localhost','root','');
} catch (PDOException $e) {
  exit('DBConnectError:'.$e->getMessage());
}

//３．データ登録SQL作成

// 1. SQL文を用意  : データを入れに行くので、インサート！（逆は・ピックする時はセレクト）
$stmt = $pdo->prepare("INSERT INTO 
                        gs_hw_1216_t(ユニーク値, 書籍名, 書籍URL, 書籍コメント,登録日時)
                        VALUES(NULL, :書籍名, :書籍URL, :書籍コメント, sysdate() )
                      ");

//  2. バインド変数を用意
// Integer 数値の場合 PDO::PARAM_INT
// String文字列の場合 PDO::PARAM_STR

$stmt->bindValue(':書籍名', $書籍名, PDO::PARAM_STR);
$stmt->bindValue(':書籍URL', $書籍URL,  PDO::PARAM_STR);
$stmt->bindValue(':書籍コメント', $書籍コメント,  PDO::PARAM_STR);

//  3. 実行
$status = $stmt->execute();

//４．データ登録処理後
if($status === false){
  //SQL実行時にエラーがある場合（エラーオブジェクト取得して表示）
  $error = $stmt->errorInfo();
  exit('ErrorMessage:'.$error[2]);
}else{
  //５．index.phpへリダイレクト

  header('Location: index_hw.php');

}
?>
