 
<!DOCTYPE html>
<html>
<head>
	<title>login</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body class="register_background">
	<div class="overlay1">
	<div id="signinbox" class="loginbox">
		<img src="images/avatar.png" class="avatar">
		<h1>Create your account</h1>
		<form action="signin.php" method="post" accept-charset="utf-8">
			<p>Name: <input type="text" name="u_name" placeholder="Enter Username"></p>
			<p>Last name: <input type="text" name="u_last" placeholder="Enter Lastname"></p>
			<p>Email: <input type="text" name="u_mail" placeholder="Enter Email"></p>
			<p>Username: <input type="text" name="u_id" placeholder="Enter Username"></p>
			<p>Password: <input type="password" name="u_pass" placeholder="Enter Password"></p>
			<p>Confirm password: <input type="password" name="u_cpass" placeholder="Re enter Password"></p>
			<p>Gender: <span class="gender">male <input type="radio" name="gender" value="male"></span> <span class="gender">female <input type="radio" name="gender" value="female"></span></p>
			<p><input type="submit" name="submit" value="SIGN UP"></p>
			<p><a href="login.php">Already sign up?</a></p>
		</form>
		</div>
	</div>
</body>
</html>