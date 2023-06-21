<?php      
    $servername="localhost";
	$username="root";
	$password="";
	$db_name="register";
			
			$db = new mysqli($servername,$username,$password,$db_name);
			if($db->connect_error){
				die('connection failed:'.$db->connect_error);
			}
    $username = $_POST['user'];  
    $password = $_POST['pass'];  
      
        //to prevent from mysqli injection  
        $username = stripcslashes($username);  
        $password = stripcslashes($password);  
        $username = mysqli_real_escape_string($db, $username);  
        $password = mysqli_real_escape_string($db, $password);  
      
        $sql = "select *from login where username = '$username' and password = '$password'";  
        $result = mysqli_query($db, $sql);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result);  
          
        if($count == 1){  
            header('location:admin.php?msg=insertion successfull..'); 
        }  
        else{  
            echo "<h1> Login failed. Invalid username or password.</h1>";  
        }     
?>  