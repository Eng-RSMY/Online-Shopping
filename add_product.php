<!DOCTYPE html>
<html>
<head>
<title>add product</title>
<link rel="stylesheet" type="text/css" href="css/reg.css">
</head>
<body>
<div class="reg">
 <h2>Add Product</h2>
 
	<form name="form1" action="" method="post" enctype="multipart/form-data"> 
	<table>
		<tr>
		<td>Product Name</td>
		<td><input type="text" name="pnm"></td>
		</tr>
		
		<tr>
		<td>Product Price</td>
		<td><input type="text" name="pprice"></td>
		</tr>
		
		<tr>
		<td>Product Quantity</td>
		<td><input type="number" name="pqty" min="10" max="100"></td>
		</tr>
		
		<tr>
		<td>Product Image</td>
		<td><input type="file" name="pimage"></td>
		</tr>
	
		<tr>
		<td>Product Caregory</td>
		<td><select name="pcategory">
				<option value="Vegetables">Vegetables</option>
				<option value="Fruits">Fruits</option>
			</select>
		</td>
		</tr>
		
		<tr>
		<td>Product Description</td>
		<td><textarea cols="15" rows="10" name="pdesc"></textarea></td>
		</tr>
		
		<tr>
		<td colspan="2" align="center"><input type="submit" name="submit1" value="upload"></td>
		</tr>
		
		<tr>
		<td><a href="admin.php">Admin Page</a></td>
		<td><a href="Logout.php">Logout</a></td>
		</tr>
	</table>
	</form>

<?php
include 'connection.php'; 
if	(isset($_POST["submit1"])){
	
	$v1=rand(1111,9999);
	$v2=rand(1111,9999);
	
	$v3=$v1.$v2;
	$v3=md5($v3);
	$fnm=$_FILES["pimage"]["name"];
	$dst="./product_image/" .$v3.$fnm;
	$dst1="product_image/" .$v3.$fnm;
	move_uploaded_file($_FILES["pimage"]["tmp_name"],$dst);
	
mysqli_query($conn,"insert into product values('','$_POST[pnm]',$_POST[pprice],$_POST[pqty],'$dst1','$_POST[pcategory]','$_POST[pdesc]')" );
}
?>
<hr>
<a href="del_product.php">Delete Product</a><br><hr>
</div>
</body>
</html>