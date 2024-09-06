<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- CSSの適応 -->
    <link rel="stylesheet" href="cs1.css">

    <title>list</title>
</head>

<body>
    <div class="width">
        <h3 class="container">投稿コメント一覧</h3>
        <table class="t1">
            <tr>
                <th>username</th>
                <th>comment</th>
                <th>date</th>
            </tr>

            <!-- PHPここから -->
            <?php
            ini_set('display_errors', "On");  //エラーの表示用(必須)

            //呼び出し Commentpost
            require_once 'Commentpost.php';

            // クラスのインスタンス化
            $view = new view();

            //viewの実行 SELECT文の簡略化
            $view->view();

            ?>
            <!-- PHPここまで -->

        </table>

        <div class="container">
            <a href="index.php">ログインページへ</a>
        </div>

        <div class="container">
            <a href="comment.php">コメント投稿ページへ</a></p>
        </div>
    </div>

</body>

</html>