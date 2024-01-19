<?php 
  session_start(); 

  if (!isset($_SESSION['username'])) {
        $_SESSION['msg'] = "You must log in first";
        header('location: login.php');
  }
  if (isset($_GET['logout'])) {
        session_destroy();
        unset($_SESSION['username']);
        header("location: login.php");
  }
?>
<!DOCTYPE html>
<html>
<head>
        <title>Home Page</title>
        <link rel="stylesheet" type="text/css" href="iindex.css">
        
</head>
<body>
<img id="img" src="images/m.jpg">

<div class="w">
        <h2>Home Page</h2>
<div class="content">
          <?php if (isset($_SESSION['success'])) : ?>
      <div class="error success" >
        <h3>
          <?php 
                echo $_SESSION['success']; 
                unset($_SESSION['success']);
          ?>
        </h3>
      </div>
        <?php endif ?>
        
        <?php  if (isset($_SESSION['username'])) : ?>
        <p id="welcome">Добро пожаловать, <strong><?php echo $_SESSION['username']; ?>!</strong></p>
    <?php endif ?>
</div>
<p id="hp_txt">Поздравляем вас с регистрацией! Сейчас вы можете выбрать себе преподавателя по желаемому предмету:
</p>
    <?php  if (isset($_SESSION['username'])) : ?>
    <p id="logoutbut"> <a href="iindex.php?logout='1'" style="color: red;">Выйти</a> </p>
    <?php endif ?>
<p id="choose"><a id="search_teach" href = "search.html">Выбрать преподавателя</a></p>
</div>
</body>
</html>