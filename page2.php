<?php
$servername="localhost";
$username="root";
$password="";
$db_name="register";
		
		$db = new mysqli($servername,$username,$password,$db_name);
		if($db->connect_error){
			die('connection failed:'.$conn->connect_error);
		}
            $ad_username= $_POST['ad_username'];
		$result=mysqli_query($db,"select * from admin where ad_username='$ad_username' ");
		$num=mysqli_num_rows($result);
        if(isset($_POST['Login']))
        {
		if($num)
		{
            $users=mysqli_fetch_array($result);
			echo $ad_name;	
            header('Login Successfully...!!');
			header('location:home.php?msg=insertion successfull..');
            exit();
		}
		else
		{
			header ('Failed to login');	
            exit();
		}}
        