<html>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<head>
		<title>WA</title>
		<link rel="stylesheet" type="text/css" href="css2.css">
	</head>
<body id=a4>
	<?php
include "connection.php";

$sql = "SELECT * FROM WA WHERE ID = (SELECT MAX(ID) FROM WA)"; 
$result = mysqli_query($conn,$sql);
$row = mysqli_fetch_array($result);
$id = $row['id'];
$fname = $row['fname'];
$lname = $row['lname'];
$year = $row['year'];
	
?>
	<h2><?php echo $fname ."". $lname; ?></h2>
	<h3>(SINCE - <?php echo $year; ?>)</h3>
</body>
</html>