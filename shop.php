<link rel="stylesheet" type="text/css" href="css/reg.css">
<div class="log">
<?php

include 'connection.php';
if($_SERVER["REQUEST_METHOD"] == "POST"){
	session_start();
	$name=$_POST["name"];
	$qty=$_POST["quantity"];
	$_SESSION["quantity"]=$qty;
	$_SESSION["name"]=$name;
	
	
	
	
    header("location:sell.php")   ;
	exit();

}
?>
<?php

		$sql="select * from product";
		$result=mysqli_query($conn,$sql);
while($row= mysqli_fetch_array($result)){

	//$_SESSION["prod_price"]=$row["product_price"];
	//$_SESSION["product_qty"]=$row["product_qty"];
	?>

	<div>
		<h2>AVAILABLE ITEMS</h2><hr>
		<img src="../my_mini_project/<?php echo $row["product_image"]; ?>" alt="no image" width="100" height="100"/>
		<h2>TK<?php echo $row["product_price"]; ?></h2>
		<p><?php echo $row["product_name"]; $_SESSION["product_name"]=$row["product_name"];?></p>
		
		<form name="form1" action="" method="post">
		<p>item name:</p>
		<input type="text" name="name"/>
		<P>Quantity</p>
		<input type="number" name="quantity" min="10" max="100"/>
		<button type="submit" name="submit1" >Add to cart
		</button>
		<hr>
	</form>
	</div>
	
<?php
}
?>
 	<a href="Profile.php">Profile</a><br>
   	   	<a href="changepaswd.php">change Password</a><br>
		
        <a href="Logout.php">Logout</a><br>
		</div>