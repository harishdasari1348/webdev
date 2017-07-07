// this is index file
<?php
$servername = "192.168.99.100";
$username = "root";
$password = "docker";

$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
echo "This is a test demo";

?>
