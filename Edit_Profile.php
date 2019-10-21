<?php
include "connection.php";

$sql = "SELECT * FROM new_emp WHERE ID = (SELECT MAX(ID) FROM new_emp)"; 
$result = mysqli_query($conn,$sql);
$row = mysqli_fetch_array($result);
$id = $row['id'];
$fname = $row['firstname'];
$lname = $row['lastname'];
$image = $row['image']; //SQL Injection defence!
$image_name = $row['image_name'];
$email = $row['email'];
$skype = $row['skype'];
$education = $row['education'];
$deptName = $row['department'];
$designation = $row['designation'];
$comment = $row['message'];
?>

<!DOCTYPE html>
<html>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<head><title>New User</title>
		<link rel="stylesheet" type="text/css" href="css4.css">
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
				else
					check=true;
					
				return check;
			}
	</script>
	</head>
	<body>
		<form name="frm" action="registeredt2.php" method="post" enctype="multipart/form-data" id="uploadForm">
		<table border=1 align=center>
		
				<input type="hidden" name="id" value="<?php echo $id; ?>"/>
			<tr>
				<td colspan=3 align=center>Edit Your Page</td>
			</tr>
			<!--<tr>
				<td>ID</td>
				<td><input type=text name="id" value="<?php echo $id; ?>"></td>
			</tr>-->
			<tr>				
				<td>First Name:</td>
				<td><input type=text name="fname" required="required" value="<?php echo $fname;?>"></td>
			</tr>
			<tr>
				<td>Last Name:</td>
				<td><input type=text name="lname" required="required" value="<?php echo $lname;?>"></td>
			</tr>
			<tr>				
				<td rowspan = 2>Upload Image:</td>
				<td rowspan = 2><div id="imagepreveiw">
				<?php if(!isset ($_REQUEST['file'])){
					echo '<img src="data:image/jpeg;base64,'.base64_encode( $row['image'] ).'" width="200" height="200" align: center/>';?><?php echo $image_name;?>
				<?php } ?>
				</div>
				<input type="hidden" name="image" value="<?php $row['image']; ?>">	
				<input type="hidden" name="imagename" value="<?php echo $image_name; ?>">	
				<input type=file name="file" id="file"></td>
			</tr>		
			<tr>
				
			</tr>
			<tr>
				<td>Email:</td>
				<td><input type=email name="email" required="required" value="<?php echo $email;?>"></td>
			</tr>
			<tr>
				<td>Skype:</td>
				<td><input type=text name="skype" required="required" value="<?php echo $skype;?>"></td>
			</tr>
			<tr>
				<td>Education:</td>
				<td><input type=text name="education" required="required" value="<?php echo $education;?>"></td>
			</tr>
			<tr>
				<td>Department</td>
				<td> <select name="deptName"> 
						<option value="<?php echo $deptName;?>"> <?php echo $deptName;?> </option> 
						<?php $new=mysqli_query($conn, "SELECT * FROM department WHERE Name NOT LIKE '{$deptName}'");
							while($r=mysqli_fetch_array($new))
							{ 
								echo "<option value='$r[Name]'> $r[Name] </option>";
							}
						?>
						<?php          
							
						?>

					</select>
				</td>
			</tr>
			<tr>
				<td>Designation:</td>
				<td><input type=text name="designation" required="required" value="<?php echo $designation;?>"></td>
			</tr>
			<tr>
				<td>Comments:</td>
				<td colspan=2><textarea rows="3" cols="35" required="required" name="comment" ><?php echo $comment;?></textarea></td>
			</tr>
			<tr>
				<td colspan=2><input type=submit name=SUBMIT value=SUBMIT required="required"></td>
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
	$("#file").change(function My() {
	filePreview(this);
	});
	
	</script>
	</body>
</html>