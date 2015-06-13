<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
</head>
<body>
<h1>Login</h1>

<form method="POST" action="_lib/scripts/login.php" enctype="multipart/form-data" name="Login">
	<label>Username: </label><input name="UserName" type="textbox" required="true"/><br>
	<label>Password: </label><input name="Password" type="password" required="true"/><br>
	<button type="submit">Login</button>
</form>

</body>
</html>