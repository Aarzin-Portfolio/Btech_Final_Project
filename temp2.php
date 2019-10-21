<html>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<head>
		<title>New_Emp</title>
		<link rel="stylesheet" type="text/css" href="css5.css">
	</head>
<body id=a2>
<?php
include "connection.php";

$sql = "SELECT * FROM new_emp WHERE ID = (SELECT MAX(ID) FROM new_emp)";

if($result = mysqli_query($conn,$sql)){
    if(mysqli_num_rows($result) > 0){
		echo "<form>";
		echo "<table align=center>";
        while($row = mysqli_fetch_array($result)){
            
			echo "<tr>";
				echo "<td>".'<img src="data:image/jpeg;base64,'.base64_encode( $row['image'] ).'" width="200" height="200" align: center/>'."</td>";
				echo "<th id=abc>NAME:<br>" . $row['firstname'] ." ". $row['lastname'] . "</th>";
			echo "</tr>";
			echo "<tr>";
				echo "<th>EMAIL:</th>";
				echo "<td>" . $row['email'] . "</td>";
			echo "</tr>";
			echo "<tr>";
				echo "<th>SKYPE:</th>";
				echo "<td>" . $row['skype'] . "</td>";
			echo "</tr>";
			echo "<tr>";
				echo "<th>EDUCATION:</th>";
				echo "<td>" . $row['education'] . "</td>";
			echo "</tr>";
			echo "<tr>";
				echo "<th>DEPARTMENT:</th>";
				echo "<td>" . $row['department'] . "</td>";
			echo "</tr>";
			echo "<tr>";
				echo "<th>DESIGNATION:</th>";
				echo "<td>" . $row['designation'] . "</td>";
			echo "<tr>";
			echo "<tr>";
				echo "<th>MESSAGE:</th>";
				echo "<td>" . $row['message'] . "</td>";
			echo "</tr>";
			//echo "<tr>";
			//	echo "<th>REGISTRATION DATE:</th>";
			//	echo "<td>" . $row['reg_date'] . "</td>";
			//echo "</tr>";
		}
			//echo "<tr>";
			//	echo "<td><input type=submit name=submit value=FINAL></td>";
			//	echo "<td><input type=submit name=edit value=Edit_Profile formaction=Edit_Profile.php></td>";
			//echo "</tr>";
        
        echo "</table>";
		
        echo "</form>";
		// Free result set
        mysqli_free_result($result);
    } else{
        echo "No records matching your query were found.";
    }
} else{
    echo "ERROR: Could not able to execute $sql. ";
}

?>
	<form action="mail2.php">
	<br><input type="submit" class="button" value="SEND">
	</form>
</body>
</html>