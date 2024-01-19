<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>�����������</title>
  <link rel="stylesheet" type="text/css" href="reg.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Croissant+One&family=Kumbh+Sans:wght@300&family=Laila:wght@300;400;700&family=Martian+Mono:wght@200&family=Roboto+Slab&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=AR+One+Sans&family=Croissant+One&family=Kumbh+Sans:wght@300&family=Laila:wght@300;400;700&family=Martian+Mono:wght@200&family=Nunito:wght@300&family=Roboto+Slab&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=AR+One+Sans&family=Croissant+One&family=Kumbh+Sans:wght@300&family=Laila:wght@300;400;700&family=Martian+Mono:wght@200&family=Montserrat:wght@200&family=Nunito:wght@300&family=Roboto+Slab&display=swap" rel="stylesheet">
<link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>


<style>
  @import url('https://fonts.googleapis.com/css2?family=AR+One+Sans&family=Croissant+One&family=Kumbh+Sans:wght@300&family=Laila:wght@300;400;700&family=Martian+Mono:wght@200&family=Nunito:wght@300&family=Roboto+Slab&display=swap');
</style>

</head>
<body>
  <img id="img" src="images/newfon.jpg">
  <div class="w">
        <h2>�����������</h2>
        
  <form method="post" action="reg.php">
        <?php include('errors.php'); ?>
        <div class="input-group">
          <!-- <label>��� ������������</label> <br> -->
          <input type="text" name="username" placeholder = "��� ������������" value="<?php echo $username; ?>">
          <i class='bx bxs-user' ></i>
        </div>
        <div class="input-group">
          <!-- <label>Email</label> <br> -->
          <input type="email" name="email" placeholder = "�����"  value="<?php echo $email; ?>">
          <i class='bx bxs-envelope' ></i>
        </div>
        <div class="input-group">
          <!-- <label>���������� ������</label> <br> -->
          <input type="password" name="password_1" placeholder = "������">
          <i class='bx bxs-lock-alt' ></i>
        </div>
        <div class="input-group">
          <!-- <label>����������� ������ -->
          <!-- </label> <br> -->
          <input type="password" name="password_2" placeholder = "����������� ������">
          <i class='bx bxs-lock-alt' ></i>

        </div>
        <div class="input-group">
          <button type="submit" class="btn" name="reg_user">������������������</button>
        </div>
        <p id="member">
                ��� ���� �������? <a href="login.php">�����</a>
        </p>
  </form>
  </div>

</body>
</html>