<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "NEW";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

// sql to create table
$sql = "CREATE TABLE New_Emp (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
firstname VARCHAR(30) NOT NULL,
lastname VARCHAR(30) NOT NULL,
image_name VARCHAR(30),
image BLOB,
email VARCHAR(50),
skype VARCHAR(50),
eduacation VARCHAR(50),
department VARCHAR(50),
designation VARCHAR(50),
comment VARCHAR(100),
reg_date TIMESTAMP
)";

if ($conn->query($sql) === TRUE) {
    echo "Table New_Emp created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}

$conn->close();
?>