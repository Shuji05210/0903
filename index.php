<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="cs1.css">

    <title>index php</title>
</head>

<body>
    <div class="width">
        <h3>ログインページ</h3>
        <table class="tb1">
            <form method="POST" action="form2.php">
                <tr>
                <tr>
                    <th>ログイン用ID</th>
                    <td><input type="text" name="userid" value="test" class="inpt"></td>
                </tr>
                <tr>
                    <th>password</th>
                    <td><input type="text" name="pass" value="pass" class="inpt"></td>
                </tr>
                </tr>
        </table>

        <input type="submit" value="ログイン" class="container">
        </form>
        

        <div class="container">
            <a href="regist.php">ユーザー登録へ戻る</a>
        </div>

        <div class="container">
            <a href="list.php">コメント一覧ページへ</a></p>
        </div>


    </div>

</body>

</html>