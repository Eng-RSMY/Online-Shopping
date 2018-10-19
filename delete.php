<?php
session_start();

include 'connection.php';
$id=$_GET["id"];

$sql = "delete FROM product where id=$id";
$r=mysqli_query($conn, $sql);

if($r==TRUE){
	
    echo "Records were deleted successfully.";
} else{
    echo "ERROR: Could not able to execute . ";
}
 
// Close connection
mysqli_close($conn);

?>