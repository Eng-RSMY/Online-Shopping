<?php

$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = '10309412xsl';
$dbname = 'food';

$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

 
// Check connection
if($conn === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

?>