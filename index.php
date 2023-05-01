<?php

require "config.php";

use App\User;

// Only logged in user should be able to open this page
if (!isset($_SESSION['is_logged_in']) || !$_SESSION['is_logged_in']) {
    header('Location: login.php');
}

$user = User::getById($_SESSION['user']['id']);

?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Welcome</title>
	</head>
	<body style="color:#fff; background-image:url(bg/3.jpg); background-repeat:no-repeat; background-attachment:fixed; background-position:center; background-size:cover; font-family:Lucida Sans Unicode; padding-top:30px;">
		<div align="center">
			<h1>Welcome, <?php echo $_SESSION['user']['fullname']; ?>!</h1>

			

			<div style="color:#000; background-color:rgba(153,153,153,0.6); padding:40px; padding-top:20px; padding-bottom:60px; margin-left:600px; margin-right:600px; border-radius:30px;">
			<h2 style="color:#fff;">User Information:</h2>
				<table style="background-color:rgba(135,255,219,0.6);" border="1" cellpadding="10">
					<tr>
						<td>User ID</td>
						<td>
							<strong>
								<?php echo $user->getId();?>
							</strong>
						</td>
					</tr>
					<tr>
						<td>First Name</td>
						<td>
							<strong>
								<?php echo $user->getFirstName();?>
							</strong>
						</td>
					</tr>
					<tr>
						<td>Middle Name</td>
						<td>
							<strong>
								<?php echo $user->getMiddleName();?>
							</strong>
						</td>
					</tr>
					<tr>
						<td>Last Name</td>
						<td>
							<strong>
								<?php echo $user->getLastName();?>
							</strong>
						</td>
					</tr>
					<tr>
						<td>Birthdate</td>
						<td>
							<strong>
								<?php echo $user->getBirthDate();?>
							</strong>
						</td>
					</tr>
					<tr>
						<td>Gender</td>
						<td>
							<strong>
								<?php echo $user->getGender();?>
							</strong>
						</td>
					</tr>
					<tr>
						<td>Contact No.</td>
						<td>
							<strong>
								<?php echo $user->getContact();?>
							</strong>
						</td>
					</tr>
					<tr>
						<td>Address</td>
						<td>
							<strong>
								<?php echo $user->getAddress();?>
							</strong>
						</td>
					</tr>
					<tr>
						<td>Email Address</td>
						<td>
							<strong>
								<?php echo $user->getEmail();?>
							</strong>
						</td>
					</tr>
				</table>
			</div>

			<h4>Ecclesiastes 3:1-8</h4>
			<pre>
There is a time for everything,
and a season for every activity under the heavens:
 a time to be born and a time to die,
a time to plant and a time to uproot,
 a time to kill and a time to heal,
a time to tear down and a time to build,
 a time to weep and a time to laugh,
a time to mourn and a time to dance,
 a time to scatter stones and a time to gather them,
a time to embrace and a time to refrain from embracing,
 a time to search and a time to give up,
a time to keep and a time to throw away,
 a time to tear and a time to mend,
a time to be silent and a time to speak,
 a time to love and a time to hate,
a time for war and a time for peace.
			</pre>

			<a href="logout.php">Log Out</a><br><br>
			
			<hr style="margin-left:500px; margin-right:500px;"/><br>
			<div style="background-color:rgba(245,66,66,0.6); text-align:left; padding:40px; padding-top:20px; padding-bottom:10px; margin-left:600px; margin-right:600px; margin-bottom:90px; border-radius:30px;">
				<pre>
SESSION DATA
<?php
var_dump($_SESSION);
?>
				</pre>
			</div>
		</div>
	</body>
</html>

