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
      <li><a class="active" href="admin.php">Admin</a></li>
      <li><a href="menu.php">Menu</a></li>

      <li><a href="m.php">Customer</a></li>
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
<a href="admin.php">
  <i class="fa-solid fa-circle-arrow-left" style="font-size:45px;align:right;color:black;">
</i></a>
<br><br>
<?php
$servername="localhost";
$username="root";
$password="";
$db_name="register";
		
		$db = new mysqli($servername,$username,$password,$db_name);
		if($db->connect_error){
			die('connection failed:'.$db->connect_error);
		}
$query = "SELECT c_i,name,city,emailid,numbers,reservation_date FROM customer";
$result = mysqli_query($db, $query);
?>
<h2 align="center">Customer Information</h2>
<center>
<table border ="1" cellspacing="0" cellpadding="10">
  <tr>
    <th>S NO</th>
    <th>Customer_id</th>
    <th>Name</th>
    <th>City</th>
    <th>Email id</th>
    <th>No of tables</th>
    <th>Reservation date</th>
    <th>Delete</th>
  </tr>
 <tr>
 <?php
if (mysqli_num_rows($result) > 0) {
  $sn=1;
  while($data = mysqli_fetch_assoc($result)) {
 ?>
 <tr>
   <td><?php echo $sn; ?> </td>
   <td><?php echo $data['c_i']; ?> </td>
   <td><?php echo $data['name']; ?> </td>
   <td><?php echo $data['city']; ?> </td>
   <td><?php echo $data['emailid']; ?> </td>
   <td><?php echo $data['numbers']; ?> </td>
   <td><?php echo $data['reservation_date']; ?> </td>
   <td><a style="color:red"href="del.php?delete=<?php echo $data['c_i'];?>" class="btn btn-danger"><i class="fa fa-trash" aria-hidden="true"></i>
Delete</a></td>
<tr>
 <?php
  $sn++;}} else { ?>
    <tr>
     <td colspan="8">No data found</td>
    </tr>

 <?php } ?>
 </table
 </center>
 