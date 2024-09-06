<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="cs1.css">

    <title>post</title>
</head>

<body>
    <div class="width">

        <!-- PHP データベース関連 オブジェクトをつかって短縮記述  ここから-->
        <?php
        ini_set('display_errors', "On");  //エラーの表示用(必須)

        //呼び出し Commentpost
        require_once 'Commentpost.php';

        // クラスのインスタンス化
        $commentpost = new Commentpost();

        // インスタンスに値を追加 (ユーザー名, コメント 日付)
        $commentpost->username = $_POST['username'];
        $commentpost->comment  = $_POST['comment'];



        //セッションの開始とセッションからIDを取得
        
        
        //日付情報の取得
        $commentpost->date = date("Y/m/d H:i:s");

        //データの追加の実行
        $commentpost->create();

        echo "コメントを投稿しました";

        ?>
        <!-- PHP データベース関連 オブジェクトをつかって短縮記述  ここまで-->

        


        <!-- ログイン状態 セッション関連 php ここから-->
         <?php 

        //セッションの値を確認
        // session_start();

        
         ?>
        <!-- ログイン状態 セッション関連 php ここまで-->


        <p><a href="list.php">投稿一覧ページへ</a></p>
    </div>

</body>

</html>