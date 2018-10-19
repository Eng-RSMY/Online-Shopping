
<?php

	session_start();
	include 'connection.php';
if($_POST){
	$opassword=$_POST['opassword'] ;
	$newpass=$_POST['newpass'] ;
	$repass=$_POST['repass'] ;
	$name= $_SESSION['name'];
	
	$qry="SELECT password from users WHERE name='$name'";
	
	$s1=mysqli_query($conn,$qry) or die("error");
	
	$odata=mysqli_fetch_row($s1);
	if($odata[0]==$opassword){
		if($newpass==$repass){

			
			$qry1="UPDATE users SET password='$newpass' WHERE name='$name'";
			
			$s2=mysqli_query($conn,$qry1) or die("error");
			if($s2){
				echo "<script>alert('password changed');</script>";
			}
		}
		else{
			echo "old and new password do not match";
		}
	}
	else{
		echo "old password not match";
	}
}
	

?>

<!DOCTYPE html>
<html>
<head>
<title>Change Password</title>
<link rel="stylesheet" type="text/css" href="css/reg.css">

</head>
<body>
<div class="reg">
	<fieldset style="width:22%">
 		<legend> <h3>CHANGE PASSWORD</h3> </legend>

		<form method="POST" action="">
		
			Current Password<br>
			<input type="password" name="opassword" required> 
			
            <br>
			New Password <br>
			<input type="password" name="newpass">
			<br>
			Retype New Password <br>
			<input type="password" name="repass">
			<br>
			<input type="checkbox" required/>Remember me
			<hr>
			<input type="submit" name="change" value="change"> 
			<a href="index.php">Home</a>
			<hr>
<a href="profile.php">Profile</a><br><hr>
        <a href="Logout.php">Logout</a><br>
</div>
		</form>
	</fieldset>
</body>
</html>
