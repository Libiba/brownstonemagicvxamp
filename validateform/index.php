<!DOCTYPE html>
<html>
<head>
	<title>Form validation Test</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div id="wrapper">
	<form method="POST" action="index.php" onsubmit="return Validate()" name="vform">
		<div> 
			<input type="text" name="username" class="textInput" placeholder="Username">
			<div id="name_error" class="val_error">
			</div>
		</div>
		
		<div> 
			<input type="email" name="email" class="textInput" placeholder="Email">
			<div id="email_error" class="val_error">
			</div>
		</div>

		<div> 
			<input type="password" name="password confirmation" class="textInput" placeholder="Pasword">
		 <div id="password_error" class="val_error"> 
			</div>
		</div>

<div> 
			<input type="submit" value="Register" Username" class="btn" name="register">
			</div>
		</div>

		</div>

	</form>f
</div>
</body>
</html>