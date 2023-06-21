<?php
$servername="localhost";
$username="root";
$password="";
$db_name="register";
		
		$db = new mysqli($servername,$username,$password,$db_name);
		if($db->connect_error){
			die('connection failed:'.$conn->connect_error);
		}
		$name= $_POST['name'];
		$city= $_POST['city'];
		$emailid= $_POST['emailid'];
		$numbers= $_POST['numbers'];
		$reservation_date= $_POST['reservation_date'];

		$insertion=mysqli_query($db,"insert into customer(name,city,emailid,numbers,reservation_date)values('$name','$city','$emailid','$numbers','$reservation_date')");
			if($insertion){
				header('location:reg.php?msg=insertion successfull..');
				exit();
			}
?>