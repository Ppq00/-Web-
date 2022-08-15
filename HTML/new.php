<?php
    $user_ID = $_GET["user_id"];
    $product_name = $_GET["name_"];
    $product_type = $_GET["type_id"];
    $product_price = $_GET["price"];
    $product_order = $_GET["order"];
    $product_delivery = $_GET["delivery"];
    $product_status = $_GET["status"];


    
    
    


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

        $query = 'INSERT INTO products (type, name, price, order_date, order_status, user_id, delivery_date) VALUES (:product_type, :product_name, :product_price, :product_order, :product_status, :user_ID, :product_delivery)';

        // SQL文をセット
        $stmt = $pdo->prepare($query);

        $stmt->bindParam(':user_ID', $user_ID);
        $stmt->bindParam(':product_name', $product_name);
        $stmt->bindParam(':product_type', $product_type);
        $stmt->bindParam(':product_price', $product_price);
        $stmt->bindParam(':product_order', $product_order);
        $stmt->bindParam(':product_delivery', $product_delivery);
        $stmt->bindParam(':product_status', $product_status);

        $stmt->execute(); 

        require_once 'new2.php';


        } catch (PDDException $e) {
            require_once 'exception_tp1.php';
            echo $e->getMessage();
            exit();
        
        } 
        

?>