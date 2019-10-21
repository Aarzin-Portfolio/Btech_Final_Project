<?php
$servername = "localhost";
$username = "id1405147_aarzin";
$password = "amt1995";
$dbname = "id1405147_new";

$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

// sql to create table
$sql = "CREATE TABLE Birthday (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
name VARCHAR(30) NOT NULL,
email VARCHAR(30) NOT NULL
)";

if ($conn->query($sql) === TRUE) {
    echo "Table Birthday created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}

$conn->close();
?>