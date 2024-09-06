<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="cs1.css">

    <title>ゆーざーとうろく</title>
</head>

<body>
    <div class="width">
        <h3>ユーザー登録ページ</h3>
        <table class="tb1">
            <form method="POST" action="formregist.php">
                <tr>
                <tr>
                    <th>ログイン用ID</th>
                    <td><input type="text" name="userid" value="test" class="inpt"></td>
                </tr>
                <tr>
                    <th>password</th>
                    <td><input type="text" name="password" value="pass" class="inpt"></td>
                </tr>
                <tr>
                    <th>お名前</th>
                    <td><input type="text" name="username" value="名無し" class="inpt"></td>
                </tr>
                </tr>
        </table>

        <input type="submit" value="送信" class="container">
        </form>
    </div>

    <div class="container">
        <p><a href="index.php">ログインページへ</a></p>
    </div>

    <div class="container">
        <p><a href="list.php">投稿一覧ページへ</a></p>
    </div>

</body>

</html>