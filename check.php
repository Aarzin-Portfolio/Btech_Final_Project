<?php

include "connection.php";

//Request from form
$email =$_GET['username'];
$pass =$_GET['pwd'];

if($email=="HRIBN" && $pass=="ABC123")
{
	echo "<img src=loading.gif>";
	header( "refresh:1;url=option.php" );
}
else
{
	window.alert("wrong password");
	echo "<h1>Sorry Wrong username or password</h1>";
	header('location: login.php');
}
?>