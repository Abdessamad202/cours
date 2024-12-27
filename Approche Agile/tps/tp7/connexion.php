<?php
$servername = "localhost";
$username = "root";
$password = "1234";
$database = "todolist";
// Create connection
$conn = new mysqli($servername, $username, $password, $database);
$task = new App\Task($conn);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
?>
