<html>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<head>
		<title>
			OPTION
		</title>
	<style>
		body{
			
			background-image: url("bg7.jpg");
			background-position: center;
			background-color: #003040;
			background-repeat: repeat;
			width:100%;
		}
		
		.b1{
			background-color: #003040;
			border: none;
			color: white;
			padding: 13px 30px;
			text-align: center;
			text-decoration: none;
			display: inline-block;
			font-size: 16px;
			margin-top: -135px;
			margin-left: 15%;
			cursor: pointer;
			border-radius: 12px;
		}
		.b1:active{
			color:cyan;
		}
		.b1:hover{
			box-shadow: 5px 5px 5px #000000; 
		}
		div.polaroid {
			margin-left:156px;
			margin-top: 90px;
			width: 75%;
			box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
			position: center;
		}
		#new{
			margin-top: -120px;
			margin-left: -25px;
			padding-bottom: 88px;
			border-radius: 2px;
		}
		#img2{
			margin-left: 607px;
			padding-top: 100px;
		}
	</style>
	</head>
	<body>
		<img id="img2" src="ibn2.png">
		<div class="polaroid">
			
			<img src="bg3.png" alt="img" style="align:center; z-index:-1;">
		<form id="new">
			<tr>
				<td><input class=b1 type="submit" name="new" value="New-Employee" formaction="new.php"></td>
				<td><input class=b1 type="submit" name="birthday" value="BIRTHDAY" formaction="bd.php"></td>
				<td><input class=b1 type="submit" name="workAnn" value="Work-Anniversary" formaction="WA1.php"></td>
			</tr>
		</form>
		</div>
	</body>
</html>