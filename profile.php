<link rel="stylesheet" type="text/css" href="css/reg.css">
<div class="log">

<?php
	session_start();
	include 'connection.php';
// Attempt select query execution
$sql = "SELECT * FROM users";
if($result = mysqli_query($conn, $sql)){
    if(mysqli_num_rows($result) > 0){
        echo "<table border='1'>";
            echo "<tr>";
                
                echo "<th>name</th>";
                echo "<th>email</th>";
				echo "<th>address</th>";
                echo "<th>usertype</th>";
            echo "</tr>";
			
	$row = mysqli_fetch_array($result);
            echo "<tr>";
                
                echo "<td>" . $row['name'] . "</td>";
                echo "<td>" . $row['email'] . "</td>";
				echo "<td>" . $row['add'] . "</td>";
                echo "<td>" . $row['usertype'] . "</td>";
            echo "</tr>";
        
		echo '<tr><a href="index.php">GO HOME...</a></tr>';
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
<hr>
<a href="changepaswd.php">change Password</a><br><hr>
        <a href="Logout.php">Logout</a><br>
</div>