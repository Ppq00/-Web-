<?php
    $pry_key = $_GET["products_id"];
    $user_ID = $_GET["user_id"];
    $start = $_GET["start"];
    $size = $_GET["size"];




    try{
        // データベースに接続
        $pdo = new PDO(
            // ホスト名、データベース名
            'mysql:host=localhost;dbname=order;',
            // ユーザー名
            'root',
            // パスワード
            '',
            // レコード列名をキーとして取得させる
            [ PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC ]
        );
 
        // SQLクエリ作成
        $query = 'SELECT * FROM products WHERE products_id = :products_ID';
        // SQL文をリセット
        $stmt = $pdo->prepare($query);
        // SQL文を実行

        //バインド 変換
        $stmt->bindParam(':products_ID', $pry_key);

        $stmt->execute(); 

        $result = $stmt->fetchAll();

        require_once 'update2.php';
        }

     catch (PDDException $e) {
        require_once 'exception_tp1.php';
        echo $e->getMessage();
        exit();
    }
?>