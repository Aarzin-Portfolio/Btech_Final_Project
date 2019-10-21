<!DOCTYPE html>
<html lang="en">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<head><title>New User</title>
	<link rel="stylesheet" type="text/css" href="css1.css">
	<script type="text/javascript">
		function validate()
			{
				var check=true;
				var filter=/^([\w\.\-])+\@+([\w])+\.+([a-zA-Z]{2,4})$/;
				if(!filter.test(document.frm.email.value))
				{
					alert("Enter valid email id");
					check=false;
					document.frm.email.focus();
				}
				else if(document.frm.deptName.value=="")
				{
					alert("Please enter your Department address");
					check=false;
					document.frm.deptName.focus();
				}
				else
					check=true;
					
				return check;
			}
	</script>
	</head>
	<body>
		<form name="frm" action="registeredt.php" method="post" enctype="multipart/form-data" id="uploadForm">
		<table border=1 align=center>
			<tr>
				<td colspan=3 align=center><img src="IBN2.png" width="100" height="50"></td>
			</tr>
			<tr>
				<td colspan=3 align=center>Welcome To IBN</td>
			</tr>
			<tr>				
				<td>First Name:</td>
				<td><input type="text" name="fname" required="required"></td>
			</tr>
			<tr>
				<td>Last Name:</td>
				<td><input type="text" name="lname" required="required"></td>
			</tr>
			<tr>				
				<td>Upload Image:</td>
				<td><input type="file" name="file" id="file" required="required"></td>
			</tr>			
			<tr>
				<td>Email:</td>
				<td><input type="email" name="email" required="required"></td>
			</tr>
			<tr>
				<td>Skype:</td>
				<td><input type="text" name="skype" required="required"></td>
			</tr>
			<tr>
				<td>Education:</td>
				<td><input type="text" name="education" required="required"></td>
			</tr>
			<tr>
				<td>Department</td>
				<td><select name="deptName"> 
						<option value=""> -----------ALL----------- </option> 
						<?php
						include "connection.php";
							$new=mysqli_query($conn, "Select Name from department");
							while($r=mysqli_fetch_array($new))
							{ 
								echo "<option value='$r[0]'> $r[0] </option>";
							}
						?>
					</select>
				</td>
			</tr>
			<tr>
				<td>Designation:</td>
				<td><input type=text name="designation" required="required"></td>
			</tr>
			<tr>
				<td>Comments:</td>
				<td colspan=2><textarea rows="3" cols="35" required="required" name="comment"></textarea></td>
			</tr>
			<tr>
				<td colspan=3 align=center><input type=Reset name=RESET value=RESET required="required">
				<input type=submit name=SUBMIT value=SUBMIT required="required"></td>
			</tr>
		</table>
		</form>
		
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	<script>
	function filePreview(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.onload = function (e) {
            $('#uploadForm + img').remove();
            $('#uploadForm').after('<img src="'+e.target.result+'" width="250" height="250"/>');
            //$('#uploadForm + embed').remove();
            //$('#uploadForm').after('<embed src="'+e.target.result+'" width="450" height="300">');
        }
        reader.readAsDataURL(input.files[0]);
		}
	}

		$("#file").change(function () {
		//filePreview(this);
	});
	</script>
	</body>
</html>

<?php 
/*if(isset($_POST['submit'])) {
	$image = addslashes(file_get_contents($_FILES['file']['tmp_name'])); //SQL Injection defence!
	$image_name = addslashes($_FILES['file']['name']);
	$sql = "INSERT INTO `new_emp` (`image`, `image_name`) VALUES ('{$image}', '{$image_name}')";
	if (!mysqli_query($conn, $sql)) { // Error handling
    echo "Something went wrong! :("; 
	}
}*/
?>