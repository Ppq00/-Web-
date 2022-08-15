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
    <form action="select.php" method="get">
        
            <h1>削除しました</h1>
        <input type="submit" name="submitBtn", value="戻る" class="button">
        <input type="hidden" name="user_id" value="<?php echo $user_ID;?>">
        <input type="hidden" name="size" value="5">
        <input type="hidden" name="start" value="0">
</form>
</body>
</div>

</html>