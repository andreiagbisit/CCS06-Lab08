<?php

require "config.php";

// If the session variable is already set, automatically redirect the user to index page
if (isset($_SESSION['is_logged_in'])) {
	if ($_SESSION['is_logged_in']) {
		header('Location: index.php');
	}
}

?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>User Account Log In</title>
	</head>
	<body style="color:#fff; background-image:url(bg/2.jpg); background-repeat:no-repeat; background-attachment:fixed; background-position:center; background-size:cover; font-family:Lucida Sans Unicode; padding-top:30px;">
		<div align="center">
		<h1>User Account Log In</h1>
		<hr style="margin-left:500px; margin-right:500px;"/><br>
			<div style="background-color:rgba(255,203,31,0.6); padding:40px; margin-left:700px; margin-right:700px; border-radius:30px;">
				<form action="attempt-login.php" method="POST">
					<div>
						<label>Email Address:</label>
						<input style="font-family:Lucida Sans Unicode;" type="email" name="email" />	
					</div><br>
					<div>
						<label>Password:</label>
						<input style="font-family:Lucida Sans Unicode;" type="password" name="password" />	
					</div><br>
					<div>
						<button>
							<span style="font-family:Lucida Sans Unicode;">Log In</span>
						</button>	
					</div><br>
					<div>
					<a href="register.php">Don't have an existing account? Click here to register.</a>	
					</div>
				</form>
			</div>
		</div>
	</body>
	</html>