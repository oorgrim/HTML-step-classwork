<?php
  include('server.php');

  if (!isset($_SESSION['username'])) {
    header('location: login.php');
  }
?>

<!DOCTYPE html>
<html>
<head>
  <title>Profile Page</title>
  <link rel="stylesheet" type="text/css" href="profile.css">
</head>
<body>
  <div class="header">
    <h2>Profile</h2>
  </div>

  <div class="content">
    <?php if (isset($_SESSION['username'])) : ?>
      <p>Welcome <strong><?php echo $_SESSION['username']; ?></strong></p>
      <p>Email: <strong><?php echo $_SESSION['email']; ?></strong></p>
      <p><a href="logout.php" style="color: red;">Logout</a></p>
    <?php endif ?>
  </div>
</body>
</html>
