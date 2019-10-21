<?php
include "connection.php";
$sql = "SELECT * FROM WA WHERE ID = (SELECT MAX(ID) FROM WA)"; 
$result = mysqli_query($conn,$sql);
if (!$result) {
    printf("Error: %s\n", mysqli_error($conn));
    exit();
}
$row = mysqli_fetch_array($result);
$id = $row['id'];
$fname = $row['fname'];
$lname = $row['lname'];
$year = $row['year'];
$email = $row['email'];

	$to = $email;
	$sub="Work Anniversary Wishes";
	
	$msg = '<html><body>';
	$msg .= '<table>';
	$msg .= "<tr><td><strong><h1><center>HAPPY WORK-ANNIVERSARY</center></h1></strong></td><tr>";
	$msg .= "<tr><td><strong><h1><center>" . strip_tags($fname ." ". $lname) . "</center></h1></strong> </td><tr>";
	$msg .= "<tr><td><strong><h1><center>(SINCE - " . strip_tags($year) . ")</center></h1></strong> </td><tr>";	
	$msg .= "</table>";
	$msg .= "</body></html>";
	
	$msg .="<center>Kindly Click On the Link <a href=\"https://hrgreeting.000webhostapp.com/bd3.php\">"Click Here!!!"</a></center>";
	
        $headers = "From: hrgreeting@000webhost.com \r\n";
        $headers .= "Cc: aarzootodiwala@gmail.com \r\n";
	$headers .= "Content-type: text/html; charset=iso-8859-1\r\n";
	$sent= mail($to,$sub,$msg,$headers);
	if($sent)
        echo "<script>alert('Thank you. we will get back to you');
             window.location='TY.php';</script>";
    else
        echo "<script>alert('Sorry.Request not send');
             window.location='template.php';</script>";
?>