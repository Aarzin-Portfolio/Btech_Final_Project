<html>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<?php
//connection
include "connection.php";
$name=$_REQUEST['name'];
$email=$_REQUEST['email'];

$sql="INSERT INTO `Birthday`(`name`, `email`)  
VALUES ('{$name}','{$email}')";

$i=mysqli_query($conn,$sql);

if($i>0)
{
	//echo "<h1>";
	//echo "<center><br/><br><h1>Registeration Successful !<br/><br>";
	//echo "<center><br/><br>Thank you for Registering please LogIn !<br/><br>";
	echo "<img src=loading.gif>";
	header( "refresh:3;url=bd2.php" );
}
else
{	
	echo "<br/><br/><h1><br/><br/>";
	echo "<center><h1>Sorry Cannot Enter in Database";
	//header( "refresh:2;url=new.php" );
}	
?>
</html>