<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="cs1.css">

    <title>ふぉーむ２</title>
</head>

<body>
    <div class="width">
        <div class="fonts">

            <!-- PHPここから -->
            <?php
            ini_set('display_errors', "On");  //エラーの表示用(必須)

            // Cookieの処理
            if (!isset($_POST["userid"])) {
                //入力されていないなら クッキー情報を削除
                setcookie("userid", "", time() - 3600);
            } else {
                //選択されているならクッキーに値をセットする
                $userid =  $_POST["userid"];
                setcookie("userid", $userid);
            }

            if (!isset($POST["pass"])) {
                setcookie("pass","", time() - 3600);
            } else {
                $userpass = $_POST["pass"];
                setcookie("pass", $pass);
            }

            //セッションIDに値をセットする
            // session_start();
            // $_SESSION["userid"] = $userid ;
            // $_SESSION["pass"] = $pass;



            //ユーザーID = "test" 且つ パスワード = "pass" なら ログイン成功
            if (($_POST["userid"] == "test") && ($_POST["pass"] == "pass")) {
                echo "<p>ログインに成功しました<p>";
            }

            //それ以外の場合 ログインに失敗と表示
            else {
                echo "ログインに失敗";
                echo "<p>ログイン情報を再度入力からやり直してください<p>";
            }

            ?>
            <!-- PHPここまで -->
        </div>

        <div class="space"></div>

        <div class="container">
            <a href="comment.php">コメント投稿ページへ進む</a></p>
        </div>

        <div class="container">
            <a href="index.php">ログインページへ</a>
        </div>

    </div>


</body>

</html>