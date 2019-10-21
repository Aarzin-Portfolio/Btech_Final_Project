<html>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<head>
	<title>LOGIN</title>
	<style>
		body{
			background-image: url("acc1.png");
			background-repeat: no-repeat; 
			background-position: center;
			background-opacity:0.9;
			width: 100%;
		}
		table {
			border: 1px solid black;
			background-color:#ffffff;
			box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
			margin-top: 250px;
			font-size: 25px;
		}
	</style>
	<script type="text/javascript">
		function validate()
		{
			var check=true;
			if(document.frm.pwd.value=="ABC123" && document.frm.username.value=="HRDIBN")
			{
				alert("Successfully logged IN");
				//check=true;
			}
			else
			{
				alert("Password or username incorrect");
				return false;
			}
			
		}	
	</script>

	</head>
	<body>
		<table align="center">
			<form name="frm" action=option.php method="GET" onSubmit="return validate();">
				<tr>
					<td colspan="2" align="center"><img src="IBN2.png"></td>
				</tr>
				<tr>
					<th>
						USERNAME:
					</th>
					<td>
						<input type="text" name="username" required>
					</td>
				</tr>
				<tr>
					<th>
						PASSWORD:
					</th>
					<td>
						<input type="password" name="pwd" required>
					</td>
				</tr>
				<tr>
					<td colspan=2 align="center">
						<input type="submit" name="submit" value="SUBMIT">
					</td>
				</tr>
			</form>
		</table>
	</body>
</html>