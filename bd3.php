<html>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<head>
		<title>Birthday</title>
		<link rel="stylesheet" type="text/css" href="css2.css">
	</head>
<body id=a3>
	<?php
include "connection.php";

$sql = "SELECT * FROM Birthday WHERE ID = (SELECT MAX(ID) FROM Birthday)"; 
$result = mysqli_query($conn,$sql);
$row = mysqli_fetch_array($result);
$id = $row['id'];
$name = $row['name'];
$email = $row['email'];

	
?>
	<h1><?php echo $name; ?></h1>
</body>
</html>