<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">

    <title></title>
    <style>
        </style>
    
</head>
<body>
<p>ようこそ <?php echo $user_name; ?> さん</p>


<p>
    <form action = "search.php" method="get">
        <label for="products">商品検索</label>
        <input type="search" name="products_name" placeholder="キーワード"/>
        <input type="submit", name="submitBtn", value="検索" class="button1">
    </form>
</p>

<?php
    $count = $start;
    foreach($result as $row) {
    $count += 1;
    echo'<p>';
    echo $count;
    echo ',  ';
    echo $row["name"];
    echo ',  \\';
    echo $row["price"];
    echo '</p>';

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
    } 

    ?>

<p>
<form action = "register.php" mechod="get">
    <input type="hidden" name="user_id" value="<?php echo $user_ID; ?>">
    <input type="submit" name="submitBtn" value="新規" class="button3">
</form>
</p>


 <form action = "select.php" mechod="get">
    <input type="hidden" name="user_id" value="<?php echo $user_ID; ?>">
    <input type="hidden" name="user_name" value="<?php echo $user_name; ?>">
    <input type="hidden" name="start" value="  
<?php
     $next = $start - 5;
     if ($next < 0) {
         $next = 0;
     }
     echo $next;
?>
     ">
     <input type="hidden" name="size" value="<?php echo $size; ?>">
     <input type="submit" name="submitBtn" value="前へ">
 </form>

 <form action="select.php" method="get">
    <input type="hidden" name="user_id" value="<?php echo $user_ID;?>">
    <input type="hidden" name="user_name" value="<?php echo $user_name; ?>">
    <input type="hidden" name="size" value="<?php echo $size; ?>">
    <input type="hidden" name="start" value="
<?php
     $next = $start + 5;
     echo $next;
?>    
    ">
    <input type="submit" name="submitBtn" value="次へ">
 </form>


</p>
</body>
</html>