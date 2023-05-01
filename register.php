<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>User Account Registration</title>
	</head>
	<body style="color:#fff; background-image:url(bg/1.jpg); background-repeat:no-repeat; background-attachment:fixed; background-position:center; background-size:cover; font-family:Lucida Sans Unicode; padding-top:30px;">
		<div align="center">
			<h1>User Account Registration</h1>
			<hr style="margin-left:500px; margin-right:500px;"/><br>

			<div style="background-color:rgba(245,66,99,0.7); padding:40px; margin-left:700px; margin-right:700px; border-radius:30px;">
				<form action="save-registration.php" method="POST">
					<div>
						<label>First Name:</label>
						<input style="font-family:Lucida Sans Unicode;" type="text" name="first_name" placeholder="ex.: John" required />	
					</div><br>
					<div>
						<label>Middle Name:</label>
						<input style="font-family:Lucida Sans Unicode;" type="text" name="middle_name" placeholder="ex.: Michael" />	
					</div><br>
					<div>
						<label>Last Name:</label>
						<input style="font-family:Lucida Sans Unicode;" type="text" name="last_name" placeholder="ex.: Doe" required />	
					</div><br>
					<div>
						<label>Birthdate:</label>
						<input style="font-family:Lucida Sans Unicode;" type="date" name="birthdate" />	
					</div><br>
					<div>
						<label>Gender:</label>
						<input type="radio" name="gender"
						<?php if (isset($gender) && $gender=="Male") echo "checked";?>
						value="Male">Male
						<input type="radio" name="gender"
						<?php if (isset($gender) && $gender=="Female") echo "checked";?>
						value="Female">Female
						<input type="radio" name="gender"
						<?php if (isset($gender) && $gender=="Other") echo "checked";?>
						value="Other">Other
					</div><br>
					<div>
						<label>Contact No.:</label>
						<input style="font-family:Lucida Sans Unicode;" type="text" name="contact" placeholder="09XXXXXXXXX" />
					</div><br>
					<div>
						<label>Address:</label>
						<input style="font-family:Lucida Sans Unicode;" type="text" name="address" placeholder="ex.: 123 Maple Street" />	
					</div><br>
					<div>
						<label>Email Address:</label>
						<input style="font-family:Lucida Sans Unicode;" type="email" name="email" placeholder="email@address.com" required />	
					</div><br>
					<div>
						<label>Password:</label>
						<input style="font-family:Lucida Sans Unicode;" type="password" name="password" placeholder="minimum of 8 characters" minlength="8" required />	
					</div><br>
					<div>
						<label>Confirm Password:</label>
						<input style="font-family:Lucida Sans Unicode;" type="password" name="confirm_password" />	
					</div><br>
					<div>
						<button>
							<span style="font-family:Lucida Sans Unicode;">Register User Account</span>
						</button>	
					</div>
				</form>
			</div>
		</div>
	</body>
</html>