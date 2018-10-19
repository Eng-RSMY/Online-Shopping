<?php
include 'connection.php';
if($_SERVER["REQUEST_METHOD"] == "POST"){

    
    $email=$_POST['email'];
	$password=$_POST['password'];
	//$usertype=$_POST['usertype'];


//echo $email;
//echo $password;
//echo $usertype;

$sql= "SELECT * FROM users WHERE email='$email'";
	//mysql_select_db('reg');
	$result = mysqli_query($conn,$sql);
	$row = mysqli_fetch_array($result);
	
	if($row['usertype']=='admin')
	{
     if($row['email']==$email && $row['password']==$password )
     {

     	        session_start();
		        $_SESSION['email'] = $email;
				$_SESSION['password'] = $password;
				$_SESSION['name'] = $row['name'];
				
     	        header("location:admin.php");
     }
     else
     {
       echo "<script>alert('Wrong User Name Or Password Try Again');</script>";
     }
	}
  else
    {


     if($row['email']==$email && $row['password']==$password )
     {

     	        session_start();
		        $_SESSION['email'] = $email;
				$_SESSION['password'] = $password;
				$_SESSION['name'] = $row['name'];
				header("location:user.php");
     }
     else
     {
       echo "<script>alert('Wrong User Name Or Password Try Again');</script>";
     }

    }     
}



?>

<!DOCTYPE html>
<html>
<head>
<title>LOG IN</title>
<link rel="stylesheet" type="text/css" href="css/reg.css">
</head>
<body>
<div class="log">
	<fieldset style="width:12%">
 		<legend> <h3>LOG IN</h3> </legend>

		<form method="POST" action="">
		
			Email <br>
			<input type="text" name="email" required> 
			
            
			Password <br>
			<input type="password" name="password">
			
			<input type="checkbox" required/>Remember me
			<hr>
			<input type="submit" name="Log in" value="Log in"> 
			<a href="reg.php">Register</a> 
		</form>
	</fieldset>
	</div>
</body>
</html>