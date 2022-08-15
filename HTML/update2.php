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
    <form method="get" action='update3.php'>

    <select name="type">
        <option value="1">ゲーム</option>
        <option value="2">PCパーツ</option>
        <option value="3">PCアクセサリ・サプライ</option>
        <option value="4">その他</option>
    </select>
    <input type='text' name='order_date' value='<?php echo $result[0]["order_date"]?>'>
    <select name="status">
        <option value="1">発注済</option>
        <option value="2">納品済</option>
        <option value="3">未発注</option>
        <option value="4">返品</option>
    </select>
    <input type='text' name='delivery_date' value='<?php echo $result[0]["delivery_date"]?>'>


        <input type='text' name='product_name' value='<?php echo $result[0]["name"]?>'>
        <input type='text' name='product_price' value='<?php echo $result[0]["price"]?>'>
        <input type="hidden" name="product_id" value="<?php echo $pry_key; ?>">
        <input type="hidden" name="user_id" value="<?php echo $user_ID; ?>">
        <input type="hidden" name="start" value="<?php echo $start; ?>">
        <input type="hidden" name="size" value="<?php echo $size; ?>">
        <input type="submit" name="submitBtn" value="変更" class="button">
</form>
</body>
</html>
