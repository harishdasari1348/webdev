// file1
<?php
$servername = "192.168.99.100";
$username = "root";
$password = "docker";

// Create connection
//this is a comment added by lakshmi
//this is another comment line by lakshmi
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
echo "Connected \n successfully";

?>
