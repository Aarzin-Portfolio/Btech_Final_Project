<?php
include "connection.php";
$fname=$_REQUEST['fname'];
$lname=$_REQUEST['lname'];
$year=$_REQUEST['year'];
$email=$_REQUEST['email'];

$sql="INSERT INTO `WA`(`fname`,`lname`,`year`,`email`)  
VALUES ('{$fname}','{$lname}','{$year}','{$email}')";

$i=mysqli_query($conn,$sql);

if($i>0)
{
	//echo "<h1>";
	//echo "<center><br/><br><h1>Registeration Successful !<br/><br>";
	//echo "<center><br/><br>Thank you for Registering please LogIn !<br/><br>";
	echo "<img src=loading.gif>";
	header( "refresh:3;url=WA2.php" );
}
else
{	
	echo "<br/><br/><h1><br/><br/>";
	echo "<center><h1>Sorry Cannot Enter in Database";
	//header( "refresh:2;url=new.php" );
}	
?>