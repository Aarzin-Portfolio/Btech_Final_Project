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
$sql = "CREATE TABLE WA (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
fname VARCHAR(30) NOT NULL,
lname VARCHAR(30) NOT NULL,
year VARCHAR(30) NOT NULL,
email VARCHAR(30) NOT NULL
)";

if ($conn->query($sql) === TRUE) {
    echo "Table WA created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}

$conn->close();
?>