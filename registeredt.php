<?php
//connection
include "connection.php";
$fname=$_REQUEST['fname'];
$lname=$_REQUEST['lname'];
$image = addslashes(file_get_contents($_FILES['file']['tmp_name'])); //SQL Injection defence!
$image_name = addslashes($_FILES['file']['name']);
$email=$_REQUEST['email'];
$skype=$_REQUEST['skype'];
$education=$_REQUEST['education'];
$deptName=$_REQUEST['deptName'];
$designation=$_REQUEST['designation'];
$comment=$_REQUEST['comment'];

$sql="INSERT INTO `new_emp`(`firstname`, `lastname`, `image_name`, `image`, `email`, `skype`, `education`, `department`, `designation`, `message` )  
VALUES ('{$fname}','{$lname}','{$image_name}', '{$image}', '{$email}','{$skype}','{$education}','{$deptName}','{$designation}','{$comment}' )";

$i=mysqli_query($conn,$sql);

if($i>0)
{
	//echo "<h1>";
	//echo "<center><br/><br><h1>Registeration Successful !<br/><br>";
	//echo "<center><br/><br>Thank you for Registering please LogIn !<br/><br>";
	echo "<img src=loading.gif>";
	header( "refresh:3;url=fetch2.php" );
}
else
{	
	echo "<br/><br/><h1><br/><br/>";
	echo "<center><h1>Sorry Cannot Enter in Database";
	//header( "refresh:2;url=new.php" );
}	
?>


