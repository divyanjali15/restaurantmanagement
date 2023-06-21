<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>ASD</title>
  <link rel="stylesheet" href="style2.css">
  <script src="https://kit.fontawesome.com/9f15565ed8.js" crossorigin="anonymous"></script>
</head><nav>

  <div class="heading">

    <h4>ASD RESTUARANT</h4>
  </div>
 <ul class="nav-links">

    <li><a  href="home.php">Home</a></li>
    <li><a href="about.php">About</a></li>

    <li><a class="active" href="ad.php">Admin</a></li>
    <li><a href="menu.php">Menu</a></li>

    <li><a href="m.php">Customer</a></li>
  </ul>
</nav><br><br><br><br>
<body style="font-family:Arial;"><center>
    <br><br>
    <br><br>
    <h1>Login</h1>
    <form action="login.php" method="post">
      <label for="user">Username:</label>
      <input type="text" id="user" name="user" required>
      <br><br>
      <label for="password">Password:</label>
      <input type="password" id="pass" name="pass" requried>
      <br><br>
      <input type="submit" value="Login">
    </form></center>
</body>
</html>
