<?php
include "connection.php";
$sql = "SELECT * FROM new_emp WHERE ID = (SELECT MAX(ID) FROM new_emp)"; 
$result = mysqli_query($conn,$sql);
if (!$result) {
    printf("Error: %s\n", mysqli_error($conn));
    exit();
}
$row = mysqli_fetch_array($result);
$id = $row['id'];
$fname = $row['firstname'];
$lname = $row['lastname'];
$image = $row['image'];
$image_name = $row['image_name'];
$email = $row['email'];
$skype = $row['skype'];
$education = $row['education'];
$deptName = $row['department'];
$designation = $row['designation'];
$comment = $row['message'];

	$to="aarzootodiwala@gmail.com";
	$sub="Thank You";
	
	$msg = '<html><body>';
	$msg .= '<table>';
	$msg .= "<center><tr><td><strong>Name:</strong> </td><td>" . strip_tags($fname ." ". $lname) . "</td></tr></center>";
	$msg .= "<center><tr><td><strong>Email:</strong> </td><td>" . strip_tags($email) . "</td></tr></center>";
	$msg .= "<center><tr><td><strong>Skype:</strong></td><td>" . strip_tags($skype) . "</td></tr></center>";
	$msg .= "<center><tr><td><strong>Education:</strong></td><td>" . strip_tags($education) . "</td></tr></center>";
	$msg .= "<center><tr><td><strong>Department:</strong></td><td>" . strip_tags($deptName) . "</td></tr></center>";
	$msg .= "<center><tr><td><strong>Designation:</strong></td><td>" . strip_tags($designation) . "</td></tr></center>";
	$msg .= "<tr><td><strong>Message:</strong></td><td>" . strip_tags($comment) . "</td></tr></center>";
	$msg .= "<strong><center>For More Details:</center></strong>";
	$msg .= "</table>";
	$msg .= "</body></html>";
	$msg .="<a href=\"https://hrgreeting.000webhostapp.com/template1.php\">Click Here!!!</a>";
	$headers = "From: hrgreeting@000webhost.com";
	$headers = "Content-type: text/html; charset=iso-8859-1\r\n";
	$sent= mail($to,$sub,$msg,$headers);
	if($sent)
        echo "<script>alert('Thank you. we will get back to you');
             window.location='TY.php';</script>";
    else
        echo "<script>alert('Sorry.Request not send');
             window.location='template.php';</script>";
?>