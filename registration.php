<!--View-->

<!DOCTYPE html>
<html>
<head>
	<title>Registration</title>
</head>
<body>

<form method="POST" action="_lib/scripts/registration.php" enctype="multipart/form-data" name="Registration">
	<input name="UserName" type="textbox" required="true"/>
	<input name="Password" type="password" required="true"/>
	<input name="FirstName" type="textbox" required="true"/>
	<input name="LastName" type="textbox" required="true"/>
	<input name="Email" type="email" required="true"/>
	<input name="Phone" type="tel"/>
	<input name="Age" type="number" required="true" />
	<input name="City" type="textbox"/>
	<input name="State" type="textbox"/> <!--Maybe a select?-->
	<input name="Country" type="textbox"/> <!--Maybe a select?-->
	<input name="MajorName" type="textbox"/>
	<input name="CollegeName" type="textbox"/>
	<button type="submit">Submit</button>
</form>

</body>
</html>