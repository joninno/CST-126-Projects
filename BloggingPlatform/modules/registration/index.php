<!-- 
/*
 * Project: CST-126-Blog-Project v.0.1
 * Module Name: UserRegistration v.0.1
 * Author: Daniel Cender
 * Date: March 3, 2019
 * Synopsis: This HTML Form takes in user data and passes it off to a PHP script that creates new users in the db.
 */
 -->

<!DOCTYPE html>
<html>
<head>
<title>Register Account</title>
</head>
<body>
<h3>Sign Up</h3>
		<div>
		<form action="./register.php" method="POST">
			First Name:<br /> <input type="text" name="firstName" required/><br />
			Last Name:<br /> <input type="text" name="lastName" required/><br />
			Email:<br /><input type="email" name="email" required/><br />
			Password:<br /><input type="password" name="password" required/><br />
			 <input
				type="submit" value="submit" />
		</form>
		</div>
</body>
</html>


<?php
?>