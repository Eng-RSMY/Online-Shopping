<?php session_start();?>

<!DOCTYPE html>
<html>
<head>
  <title>User Panel</title>
  <link rel="stylesheet" type="text/css" href="css/reg.css">
</head>
<body>
    <div class=log>
	
	<?php


    $name= $_SESSION['name'];
    echo "Welcome ".$name;
	
?>
<hr>
<hr>
<br>
   	   	<a href="Profile.php">Profile</a><br>
   	   	<a href="changepaswd.php">change Password</a><br>
		<a href="shop.php">Buy Item</a><br>
        <a href="Logout.php">Logout</a><br>
    </div> 

</body>
</html>