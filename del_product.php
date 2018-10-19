<link rel="stylesheet" type="text/css" href="css/reg.css">
<div class="reg">
<?php
	session_start();
	include 'connection.php';
// Attempt select query execution
$sql = "SELECT * FROM product";
if($result = mysqli_query($conn, $sql)){
    if(mysqli_num_rows($result) > 0){
        echo "<table border='1'>";
            echo "<tr>";
				echo "<th>Product image</th>";
                echo "<th>Product name</th>";
                echo "<th>Product price</th>";
                echo "<th>Product quantity</th>";
				echo "<th>Product category</th>";
				echo "<th>delete product</th>";
            echo "</tr>";
			
        while($row = mysqli_fetch_array($result)){
            echo "<tr>";
				echo "<td>"; ?> <img src="<?php echo $row["product_image"];?> " height="100" width="100"><?php echo "</td>";
                echo "<td>" . $row['product_name'] . "</td>";
                echo "<td>" . $row['product_price'] . "</td>";
				echo "<td>" . $row['product_qty'] . "</td>";
                echo "<td>" . $row['product_category'] . "</td>";
				
				echo "<td>"; ?> <a href="delete.php?id=<?php echo $row["id"]; ?>">Delete Order</a> <?php echo "</td>";
            echo "</tr>";
        }
		echo '<tr><a href="home.php">GO HOME</a> </tr>';
		echo "<hr>";
        echo "</table>";
        // Free result set. mysqli_free_result() function frees the memory associated with the result.
        mysqli_free_result($result);
    } else{
        echo "No records matching your query were found.";
    }
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
}
 
// Close connection
mysqli_close($conn);
?>
<a href="admin.php">Admin </a><br><hr>
<a href="add_product.php">Add Product</a><br><hr>
<a href="viewuser.php"></a><br><hr>
        <a href="Logout.php">Logout</a><br>
</div>