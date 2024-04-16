<?php
$dbhost = "localhost"; 
$dbuname = "root";  // Database username
$dbpass = "";   // Database password
$dbname = "promotion_website";

// Create connection
$conn = new mysqli($dbhost, $dbuname, $dbpass, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";

// return the connection (if needed)
// return $conn;
?>  
