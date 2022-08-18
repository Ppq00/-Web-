

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">

  <title></title>
  <style>
    body{
     background-color: aquamarine;
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
  <p>
    <label>追加する商品情報を入力してください</label>
  </p>

  <?php
      $user_ID = $_GET["user_id"];
  ?>

<form action ="new.php" method="get">

<p>
    <label for="type_id">カテゴリー</label>
    <select name="type_id">
        <option value="1">ゲーム</option>
        <option value="2">PCパーツ</option>
        <option value="3">PCアクセサリ・サプライ</option>
        <option value="4">その他</option>
</select>
</p>

<p>
    <label for="name_">商品名</label>
    <input type="text" style="ime-mode:disabled;" name="name_" placeholder="商品名を入力"/>
</p>

<p>
    <label for="price">金額</label>
    <input type="text" style="ime-mode:disabled;" name="price" placeholder="例:1280"/>
</p>


<p>
    <label for="order">注文日</label>
    <input type="text" style="ime-mode:disabled;" name="order" placeholder="例:2022-01-01"/>
</p>

<p>
    <label for="delivery">到着日</label>
    <input type="text" style="ime-mode:disabled;" name="delivery" placeholder="例:2022-01-01"/>
</p>


<p>
    <label for="status">発送状況</label>
    <select name="status">
        <option value="1">発注済</option>
        <option value="2">納品済</option>
        <option value="3">未発注</option>
        <option value="4">返品</option>
</select>
</p>


<input type="hidden" name="user_id" value="<?php echo $user_ID;?>">
<input type="submit", name="sunmitBtn", value="登録" class="button">
</form>
<p>
</p>



</body>
</div>
</html>