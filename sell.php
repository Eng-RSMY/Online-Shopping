<?php
session_start();
include 'connection.php';
 $qty=$_SESSION["quantity"];
$name=	$_SESSION["name"];
  $sql="select * from product where product_name='$name'";
		$result=mysqli_query($conn,$sql);
		
$row= mysqli_fetch_array($result);
$dbqty=$row["product_qty"];
//echo $dbqty;

if($row['product_qty']>= $qty && $row['product_name']== $name){
	$total = ($row["product_price"]* $qty);
	
	echo "your total bill amount is:" . $total ."taka";
	$new_qty=$dbqty-$qty;
	//echo $new_qty;
	$qry1="UPDATE product SET product_qty='$new_qty' WHERE product_name='$name'";
	$s2=mysqli_query($conn,$qry1) or die("error");
			if($s2){
				echo "<script>alert('updated');</script>";
			}
		
		else{
			echo "<script>alert('not updated');</script>";
		}
}
else{
		echo "<script>alert('This much quantity isnot available');</script>";
		
		header("location:shop.php")   ;
	}

 ?>