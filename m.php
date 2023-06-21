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
      <li><a href="ad.php">Admin</a></li>
      <li><a href="menu.php">Menu</a></li>

      <li><a class="active" href="m.php">Customer</a></li>
    </ul>
</nav>
	<br><br><br><br>
<style>
body {
  font-family: Arial;
  color: black;
}

.split {
  height: 90%;
  width: 100%;
  position: fixed;
  z-index: 1;
  top: 15%;
  overflow-x: hidden;
  padding-top: 20px;
}
.right {
  right: 0;
  background-color: #d9e5e5;
}

label{
display:inline-block;
width:400px;
margin-right:200px;
text-align:right;
}

input{

}

fieldset{
border:none;
width:200px;
margin:0px auto;
}
h3{
background-color: #008B8B
}
</style>
</head>

<body>
	<form action="page1.php" method="post"> 
	<div class="split right">
	<h4 align="center">Data for Table Registration :  </h4>
  <p style="text-align:center;">Total number of tables - 15</p>
  <p style="text-align:center;">Cost per each table = Rs.1000/-</p>
	<fieldset>
	<label for="name">Name  :  <input type="text" name="name" required> <br/><br/>
	<label for="city">City        :  <input type="text" name="city" required> <br/><br/>
	<label for="emailid">Email id :  <input type="text" name="emailid" required> <br/><br/>
  <label for="numbers">No.of tables:  <input type="number" name="numbers" required> <br/><br/>
  <label for="reservation_date">Reservation Date:  <input type="date" name="reservation_date" required> <br/><br/>
	</fieldset>
  <p align="center" style="font-size=40px;">For further detalis contact +919347728161</p><br>
	<div align="center">	
	<input type="submit" name="customeradd" value="Register">
	</div>
	</div>
	</form>
</body>

</html>