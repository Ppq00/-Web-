<?php
    $type = $_GET["type"];
    $order_date = $_GET["order_date"];
    $status = $_GET["status"];
    $delivery_date = $_GET["delivery_date"];

    $product_name = $_GET["product_name"];
    $product_price = $_GET["product_price"];
    $product_ID = $_GET["product_id"];
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
 
        
        // SQL文をセット
        $stmt = $pdo->prepare('UPDATE products SET name = :product_name, price = :product_price, type = :type, order_date = :order_date, order_status = :status, delivery_date = :delivery_date WHERE products_id = :product_ID');
        

        //バインド 変換
        $stmt->bindParam(':product_ID', $product_ID);
        $stmt->bindParam(':product_name', $product_name);
        $stmt->bindParam(':product_price', $product_price);
        
        $stmt->bindParam(':type', $type);
        $stmt->bindParam(':order_date', $order_date);
        $stmt->bindParam(':status', $status);
        $stmt->bindParam(':delivery_date', $delivery_date);

        $stmt->execute(); 

        $result = $stmt->fetchAll();

        require_once 'update4.php';
        }

     catch (PDDException $e) {
        require_once 'exception_tp1.php';
        echo $e->getMessage();
        exit();
    }
?>