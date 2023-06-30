
<?php 
// Establish a database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "grace";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}