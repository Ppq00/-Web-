<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">

    <title></title>
    <style>
    body{
     width: 500px;
   padding: 40px 10px;
   position: absolute;
   top: 50%;
   left: 50%;
   transform: translate(-50%,-50%);
   
   text-align: center;
   }
 
 </style>
</head>
<body>

<?php
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
?>


<form action = "update.php" mechod="get">
        <input type="hidden" name="products_id" value="<?php echo $row['products_id']; ?>">
        <input type="hidden" name="user_id" value="<?php echo $user_ID; ?>">
        <input type="hidden" name="start" value="0">
        <input type="hidden" name="size" value="5">
        <input type="submit" name="submitBtn" value="変更" class="button">
    </form>

    <form action = "delete.php" mechod="get">
        <input type="hidden" name="name" value="<?php echo $row['name']; ?>">
        <input type="hidden" name="price" value="<?php echo $row['price']; ?>">
        <input type="hidden" name="type" value="<?php echo $row['type']; ?>">
        <input type="hidden" name="products_id" value="<?php echo $row['products_id']; ?>">
        <input type="hidden" name="user_id" value="<?php echo $user_ID; ?>">
        <input type="hidden" name="start" value="0">
        <input type="hidden" name="size" value="5">
        <input type="submit" name="submitBtn" value="削除" class="button2">
    </form>

<?php   
    

    ?>

    <form action="select.php" method="get">
        
            
        <input type="submit" name="submitBtn", value="戻る" class="button">
        <input type="hidden" name="user_id" value="<?php echo $user_ID;?>">
        <input type="hidden" name="size" value="5">
        <input type="hidden" name="start" value="0">
</form>
</body>
</div>

</html>