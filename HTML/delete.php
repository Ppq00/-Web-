<?php
    
    $productID = $_GET["products_id"];
    $product_name = $_GET["name"];
    $product_price = $_GET["price"];
    $product_type = $_GET["type"];
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
        $stmt = $pdo->prepare('DELETE FROM products WHERE type = :product_type and name = :product_name and price = :product_price and products_id = :product_id');
        

        //バインド 変換
        $stmt->bindParam(':product_price', $product_price, PDO::PARAM_INT);
        $stmt->bindParam(':product_name', $product_name);
        $stmt->bindParam(':product_type', $product_type);
        $stmt->bindParam(':product_id', $productID);
        
        $stmt->execute(); 


        require_once 'delete2.php';

        }

     catch (PDDException $e) {
        echo $e->getMessage();
        
    } finally {

        $pdo = null;
    }
?>