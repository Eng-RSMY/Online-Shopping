<?php session_start();?>

<!DOCTYPE html>
<html>
<head>
  <title>Admin Panel</title>
  <link rel="stylesheet" type="text/css" href="css/reg.css">
</head>
<body>
    <div class="reg">
<?php


    $name= $_SESSION['name'];
    echo "Welcome ".$name;
?>
		<hr>
   	   	 <li><a href="Profile.php">Profile</a></li>
   	   	 <li><a href="changepaswd.php">change Password</a></li>
         <li><a href="viewuser.php">view users</a></li>		
   	
		 <li><a href="add_product.php">add product</a></li>	
		 <li><a href="del_product.php">delete product</a></li>	
        <li><a href="Logout.php">Logout</a></li>
    </div> 

</body>
</html>