<?php
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
        $query = 'SELECT * FROM users WHERE user_id = :user_ID';
        // SQL文をセット
        $stmt = $pdo->prepare($query);
        // SQL文を実行
        $stmt->bindParam(':user_ID', $user_ID);

        $stmt->execute(); 


        $result = $stmt->fetchAll();
        if(empty($result)) {
            require_once 'login.html';
        } else {
            $user_name = $result[0]["name"];
            //5件だけ検索
            $query = 'SELECT * FROM products WHERE user_id = :user_ID limit :begin, :size';


            $stmt = $pdo->prepare($query);
            $stmt->bindParam(':begin', $start, PDO::PARAM_INT);  //foramt
            $stmt->bindParam(':size', $size, PDO::PARAM_INT);    //format
            $stmt->bindParam(':user_ID', $user_ID);
            $stmt->execute(); // sql実行
            $result = $stmt->fetchAll();

            require_once 'viewSelect_tpl.php';
        }

        } catch (PDDException $e) {
            require_once 'exception_tp1.php';
            echo $e->getMessage();
            exit();
        }
?>