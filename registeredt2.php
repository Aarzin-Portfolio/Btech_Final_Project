<?php
//connection
include "connection.php";
/*echo "<pre>";
print_r($_POST);
echo "<pre>";*/
if(isset($_POST['SUBMIT'])){
	if (is_numeric($_POST['id'])){
		
	//if(isset($_GET['id']) && is_numeric($_GET['id']) && $_GET['id'] > 0){
	$id = $_POST['id'];
	$fname=$_REQUEST['fname'];
	$lname=$_REQUEST['lname'];
	$email=$_REQUEST['email'];
	$skype=$_REQUEST['skype'];
	$education=$_REQUEST['education'];
	$deptName=$_REQUEST['deptName'];
	$designation=$_REQUEST['designation'];
	$comment=$_REQUEST['comment'];

	if($_FILES['file']['tmp_name'] !=''){
		$image = addslashes(file_get_contents($_FILES['file']['tmp_name'])); //SQL Injection defence!
		$image_name = addslashes($_FILES['file']['name']);
		$sql="UPDATE new_emp SET firstname='{$fname}', lastname='{$lname}', image='{$image}', image_name='{$image_name}', email='{$email}', skype='{$skype}', education='{$education}', department='{$deptName}', designation='{$designation}', message='{$comment}' WHERE id='$id';";
	}
	else
	{
		//$eximage=$_REQUEST['image'];
		//$data = getImageById($_GET["id"]);
		//$image = $eximage; //SQL Injection defence!
		//$image_name = $_REQUEST['imagename'];
		$sql="UPDATE new_emp SET firstname='{$fname}', lastname='{$lname}', email='{$email}', skype='{$skype}', education='{$education}', department='{$deptName}', designation='{$designation}', message='{$comment}' WHERE id='$id';";
		//$image = addslashes(file_get_contents($_FILES['file'])); //SQL Injection defence!
		//$image_name = addslashes($_FILES['file']['name']);
	}
	
	 

	$i=mysqli_query($conn,$sql);
	
	if($i>0)
	{
		//echo "<h1>";
		//echo "<center><br/><br><h1>Registeration Successful !<br/><br>";
		//echo "<center><br/><br>Thank you for Registering please LogIn !<br/><br>";
		echo "<img src=loading.gif>";
		header( "refresh:2;url=fetch2.php" );
	}
	else
	{	
		echo "<br/><br/><h1><br/><br/>";
		echo "<center><h1>Sorry Cannot Enter in Database";
		//header( "refresh:2;url=new.php" );
	}
}
}	
?>