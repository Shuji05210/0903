<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="cs1.css">

    <title>Comment php</title>
</head>

<body>
    <div class="width">
        <h3>コメント投稿ページ</h3>
        <table class="tb1">
            <form method="POST" action="post.php">
                <tr>
                <tr>
                    <th>名前</th>
                    <td><input type="text" name="username" class="inpt"></td>
                </tr>
                <tr>
                    <th>コメント</th>
                    <td><input type="text" name="comment" class="inpt"></input></td>
                </tr>
                
                </tr>
        </table>
        

        <input type="submit" value="投稿">
        </form>
    
    <p><a href="list.php">コメント一覧ページへ</a></p>
    </div>

</body>

</html>