<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>書籍登録</title>
    <link href="css/bootstrap.min_hw.css" rel="stylesheet">
    <style>
        div {
            padding: 10px;
            font-size: 16px;
        }
    </style>
</head>

<body>

    <!-- Head[Start] -->
    <header>
        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <div class="navbar-header"><a class="navbar-brand" href="select_hw.php">記録一覧</a></div>
            </div>
        </nav>
    </header>
    <!-- Head[End] -->

    <!-- Main[Start] -->
    <form method="post" action="insert_hw.php">
        <div class="jumbotron">
            <fieldset>
                <legend>読書記録</legend>
                <label>書籍名：<input type="text" name="書籍名"></label><br>
                <label>URL:<input type="text" name="書籍URL"></label><br>
                <label>コメント：<textArea name="書籍コメント" rows="4" cols="40"></textArea></label><br>
                <input type="submit" value="送信">
            </fieldset>
        </div>
    </form>
    <!-- Main[End] -->


</body>

</html>
