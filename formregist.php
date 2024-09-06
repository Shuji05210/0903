<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="cs1.css">

    <title>とうろく用フォーム formregist php</title>
</head>

<body>
    <div class="width">
        <div class="fonts">

            <!-- PHPここから -->
            <?php
            ini_set('display_errors', "On");  //エラーの表示用(必須)


            //入力された値をデータベース上に登録を行う処理

            //コネクションを開く boardを開く
            $link = mysqli_connect("localhost", "root", "mariadb", "board");

            //文字コードセット
            mysqli_set_charset($link, "utf8mb4");

            //INSERT文 
            $stmt = mysqli_prepare(
                $link,
                "INSERT INTO user_regist (userid, password, username)" . " VALUES (?, ?, ?);"
            );

            //値を設定する 登場した？の順に設定される
            mysqli_stmt_bind_param(
                $stmt,
                "sss",
                $_POST["userid"],
                $_POST["password"],
                $_POST["username"]
            );

            //INSERT文の発行
            mysqli_stmt_execute($stmt);

            //コネクションを閉じる (データベースからログアウト)
            mysqli_close($link);

            echo "[ユーザー名]&nbsp;" . $_POST["username"] . "&nbsp;さんを登録しました";
            ?>


        </div>

        <div class="space"></div>

        <div class="container">
            <a href="index.php">ログインページへ</a>
        </div>

        <div class="container">
            <a href="regist.php">ユーザー登録へ戻る</a>
        </div>

        <div class="container">
            <a href="list.php">コメント一覧ページへ</a></p>
        </div>

    </div>


</body>

</html>