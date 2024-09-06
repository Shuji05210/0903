<?php
ini_set('display_errors', "On"); //エラー表示用

class Commentpost
{   
    public $username;
    public $comment;
    public $date;
    public $link;

    public $userid;

    // コンストラクター
    public function __construct()
    {
        //コンストラクタ―内でメソッドを動作させる
        $this->link = mysqli_connect("localhost", "root", "mariadb", "board");

        //文字コードを設定
        mysqli_set_charset($this->link, "utf8mb4");
    }

    //create で実行される 部分
    public function create()
    {
        $stmt = mysqli_prepare(
            $this->link,
            "INSERT INTO data (username, comment, date)" .
                " VALUES (?, ?, ?);"
        );

        mysqli_stmt_bind_param(
            $stmt,
            "sss",
            $this->username,
            $this->comment,
            $this->date
        );

        mysqli_stmt_execute($stmt);

        // コネクションを閉じる（データベースからログアウト）
        mysqli_close($this->link);
    }
}


// 閲覧用のクラス 
class View
{
    public $username;
    public $comment;
    public $date;
    public $link;

    // コンストラクター
    public function __construct()
    {
        //コンストラクタ―内でメソッドを動作させる
        $this->link = mysqli_connect("localhost", "root", "mariadb", "board");

        //文字コードを設定
        mysqli_set_charset($this->link, "utf8mb4");
    }

    //view で実行される 部分
    public function view()
    {
        //コネクションを開く
        $link = mysqli_connect("localhost", "root", "mariadb", "board");

        //文字コード設定
        mysqli_set_charset($link, "utf8mb4");

        //SELECT文を発行する
        $result = mysqli_query($link, "SELECT * FROM data;");

        //レコードセットを繰り返し取得する
        while ($row = mysqli_fetch_array($result)) {
            echo "<tr>";
            echo "<td>" . htmlspecialchars(($row["username"])) . "&nbsp;さん</td>";
            echo "<td>" . htmlspecialchars(($row["comment"])) . "</td>";
            echo "<td>" . htmlspecialchars(($row["date"])) . "</td>";
            echo "<td>" . htmlspecialchars(($row["userid"])) . "</td>";
            echo "</tr>";
        }

        //レコードセットを解放する
        mysqli_free_result($result);

        //コネクションを閉じる
        mysqli_close($link);
    }
}
