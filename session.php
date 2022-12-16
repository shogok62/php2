<?php

// 頁を遷移してもデータを表示できる！！

session_start();

$_SESSION["name"] = "きむら<br>";
$_SESSION["num"] = 96;

echo $_SESSION["name"];
echo $_SESSION["num"];

?>