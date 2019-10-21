<?php
$servername = "localhost";
$username = "id1405147_aarzin";
$password = "amt1995";
$dbname = "id1405147_new";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
?>