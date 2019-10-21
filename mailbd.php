<?php
include "connection.php";
$sql = "SELECT * FROM Birthday WHERE ID = (SELECT MAX(ID) FROM Birthday)"; 
$result = mysqli_query($conn,$sql);
if (!$result) {
    printf("Error: %s\n", mysqli_error($conn));
    exit();
}
$row = mysqli_fetch_array($result);
$id = $row['id'];
$name = $row['name'];
$email = $row['email'];

	$to = $email;
	$sub="Birthday Wishes";
	
	$msg = '<html><body>';
	$msg .= '<table>';
	$msg .= "<tr><td><strong><h1><center>May God Decorate Each Golden Ray of the Sun Falling on You with Success, Happiness and Prosperity.</center></h1></strong></td><tr>";
	$msg .= "<tr><td><strong><h1><center>HAPPY BIRTHDAY</center></h1></strong></td><tr>";
	$msg .= "<tr><td><strong><h1><center> TO " . strip_tags($name) . "</center></h1></strong> </td><tr>";
	$msg .= "</table>";
	$msg .= "</body></html>";
	
	$msg .="Kindly Click On the Link <a href=\"https://hrgreeting.000webhostapp.com/bd3.php\">"Click Here!!!"</a>";
	
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