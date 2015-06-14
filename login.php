<? include "head.php"; ?>
<div class="row">
	<h2>Login</h2>

	<form method="POST" action="_lib/scripts/login.php" enctype="multipart/form-data" name="Login">
		<label>Username: </label><input name="UserName" type="text" required="true"/><br>
		<label>Password: </label><input name="Password" type="password" required="true"/><br>
		<button type="submit">Login</button>
	</form>
</div>
<? include "footer.php"; ?>