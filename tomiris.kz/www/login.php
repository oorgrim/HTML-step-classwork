<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>����</title>
  <link rel="stylesheet" type="text/css" href="login.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Croissant+One&family=Kumbh+Sans:wght@300&family=Laila:wght@300;400;700&family=Martian+Mono:wght@200&family=Roboto+Slab&display=swap" rel="stylesheet">
<link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>



</head>
<body>
<img id="img" src="images/newfon.jpg">
  <div class="w">
        <h2>����
        </h2>
         
  <form method="post" action="login.php">
        <?php include('errors.php'); ?>
        <div class="input-group">
                <!-- <label>��� ������������</label> <br> -->
                <input type="text" name="username" placeholder="Username">
                <i class='bx bxs-user'></i>
                </div>
        <div class="input-group">
                <!-- <label>������� ������</label> <br> -->
                <input type="password" name="password" placeholder="Password">
                <i class='bx bxs-lock-alt'></i>
        </div>
        <div class="input-group">
                <button type="submit" class="btn" name="login_user">�����
                </button>
        </div>
        <p id="member">
                ��� ��� ��������? <a href="reg.php">������������������</a>
        </p>
  </form>
</div>
</body>
</html>