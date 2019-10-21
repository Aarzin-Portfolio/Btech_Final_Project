<?php
session_start();

//connection
include "connection.php";

session_destroy();
header("location:login.php");
?>