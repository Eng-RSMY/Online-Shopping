<?php session_start();?>

<?php

if($_SERVER["REQUEST_METHOD"] == "POST"){
	$errors = array();
	
		$password=$_POST['password'];
		$cpassword=$_POST['cpassword'];
		$name=$_POST['name'];
		$email=$_POST['email'];
		$usertype=$_POST['usertype'];
				
        //start validation
		if(empty($_POST['name']))
        {
            $errors['name'] = "name field cannot be empty";
        }   

        if(empty($_POST['password']))
        {
            $errors['password1'] = "Password cannot be empty";
        }
        if(strlen($_POST['password']) < 8)
        {
            $errors['password2'] = "Password must be atlest 8 characters long";
        }
		if(empty($_POST['cpassword']))
        {
            $errors['cpassword1'] = "Password cannot be empty";
        }
        if(strlen($_POST['cpassword']) < 8)
        {
            $errors['cpassword2'] = "Password must be atlest 8 characters long";
        }
		if($password!=$cpassword){
			$errors['password3']="***password not matched***";
		}
		
		if(empty($_POST['email']))
        {
            $errors['email'] = "email field cannot be empty";
        }
		
		if(empty($_POST['add']))
        {
            $errors['add'] = "address field cannot be empty";
        }
		
		if(empty($_POST['usertype']))
        {
            $errors['usertype'] = "user type field cannot be empty";
        }
		
        //check errors
        if(count($errors) == 0)
        {	


			include 'connection.php';


			$sql = "SELECT * FROM users where email='$email'";


			if($result = mysqli_query($conn, $sql)){
				$row = mysqli_fetch_array($result);

				if($row['email']==$email){

					 echo "<script>alert('user already exist');</script>"; 
					 header("Location:index.php");
					 exit();
				}
				 else{



				 session_start();
   		 	$_SESSION['usertype']=$usertype;
		
			$sql="INSERT INTO users(name,Password,email,add,usertype)
			VALUES('$name','$password','$email','$add','$usertype')";

			if(mysqli_query($conn,$sql)){


            echo "<script>alert('Success');</script>";
            header("location:index.php");
			exit();
          }
         else{
          	echo "Error" . mysqli_error($conn);
          }
          mysqli_close($conn);
				 }
			}
			
		}
}
    
?>


<!DOCTYPE html>
<html>
<head>
<title>Lab task</title>
<link rel="stylesheet" type="text/css" href="css/reg.css">
</head>
<body>
<div class='reg'>
	<fieldset style="width:15%">
 		<legend> <h3>REGISTRATION</h3> </legend>
		<form  method="POST" action="reg.php">
			Name <br>
            <input type="text" name="name" value="<?php if(isset($_POST['name'])) echo $_POST['name']; ?>" required>
			<p><?php if(isset($errors['name'])) echo $errors['name']; ?></p>
			            
			Password <br>
			<input type="password" name="password"  required pattern=".{6,}">
			<p><?php if(isset($errors['password1'])) echo $errors['password1']; ?></p>
            <p><?php if(isset($errors['password2'])) echo $errors['password2']; ?></p>
			<p><?php if(isset($errors['password3'])) echo $errors['password3']; ?></p>
			
			Confirm Password <br>
			<input type="password" name="cpassword"  required pattern=".{6,}">
			<p><?php if(isset($errors['cpassword1'])) echo $errors['cpassword1']; ?></p>
            <p><?php if(isset($errors['cpassword2'])) echo $errors['cpassword2']; ?></p>
			
			
			Email <br>
			<input type="text" name="email" value="<?php if(isset($_POST['email'])) echo $_POST['email']; ?>" required pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$">
			<p><?php if(isset($errors['email'])) echo $errors['email']; ?></p> 
			
			Address <br>
			<input type="text" name="add" value="<?php if(isset($_POST['add'])) echo $_POST['add']; ?>" required >
			<p><?php if(isset($errors['add'])) echo $errors['add']; ?></p> 
			
			User type[User/Admin]<br>
			<select for="text" name="usertype"  value="<?php if(isset($_POST['usertype'])) echo $_POST['usertype']; ?>" required>
				<option value="user">User</option>
				<option value="admin">Admin</option>
			</select> 
			<br>
			<hr>
			<input type="submit" name="Register" value="Register"> <br><hr>
			<a href="log.php">Log in</a> 
			<a href="index.php">Home</a>
		</form>
	</fieldset>
	</div>
</body>
</html>