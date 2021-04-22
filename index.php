
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>login</title>
  <link rel="stylesheet" href="css/style1.css">
  <script type="text/javascript">
    


  </script>
</head>
<body>

  <div class="form">
    <h1>Вход</h1>
    <div class="input-form">
      <form action="check.php" method="post">
      <input type="text" placeholder="Логин" name="email" name="login" id="login">
    </div>
    <div class="input-form">
      <input type="password" placeholder="Пароль" name="password">
      
    </div>
  </form>
    <div class="input-form">
     
  <input class="btn btn-success" type="submit" name="signin" value="join"> </input >
 
    </div>
</div>

<?php
$link = mysqli_connect("mysql.joinserver.ru:3306", "u30241_L5YqX17Rlt", "JmCidq8nAL2msLttaxQdafsN");

if ($link == false){
    print("Ошибка: Невозможно подключиться к MySQL " . mysqli_connect_error());
}
else {
    print("Соединение установлено успешно");
}


?>
</body>
</html>