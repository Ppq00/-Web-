<?php
    $textbox = $_GET["products_name"];


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
    $query = 'SELECT * FROM products WHERE name like :products_name';

    $stmt = $pdo->prepare($query);
    $product = '%'.$textbox.'%';

    $stmt->bindParam(':products_name', $product);

    $stmt->execute();

    $result = $stmt->fetchAll();
    if(empty($result)){
        echo '該当するデータがありません';

    }else{
        foreach($result as $row){
            echo '<p>';
            echo $row["name"];
            echo ', \\';
            echo $row["price"];
            echo ', タイプ';
            echo $row["type"];
            echo '</p>';
        }
    }

  } catch (PDDException $e) {
      require_once 'exception_tp1.php';
      echo $e->getMessage();
      exit();
}
?>