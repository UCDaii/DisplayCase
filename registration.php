<!--View-->

<!DOCTYPE html>
<html>
<head>
	<title>Registration</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
	<script src="_lib/js/mask.js"></script>
</head>
<body>

<form method="POST" action="_lib/scripts/registration.php" enctype="multipart/form-data" name="Registration">
	<label>Username: </label><input name="UserName" type="textbox" required="true"/><br>
	<label>Password: </label><input name="Password" type="password" required="true"/><br>
	<label>First Name: </label><input name="FirstName" type="textbox" required="true"/><br>
	<label>Last Name: </label><input name="LastName" type="textbox" required="true"/><br>
	<label>Email: </label><input name="Email" type="email" required="true"/><br>
	<label>Phone: </label><input id="phone" name="Phone" type="tel"/><br>
	<label>Age: </label><input name="Age" type="number" required="true" /><br>
	<label>City: </label><input name="City" type="textbox" required="true"/><br>
	<label>State: </label><input name="State" type="textbox" required="true"/> <br><!--Select with state abbreviation-->
	<label>Country: </label><input name="Country" type="textbox" required="true"/> <br><!--Select with countries-->
	<label>Major: </label><input name="MajorName" type="textbox" required="true"/> <br>
	<label>Major Category: </label><input name="CategoryName" type="textbox" required="true"/><br> <!--Select with categories-->
	<label>College: </label><input name="CollegeName" type="textbox" required="true"/><br>
	<button type="submit">Submit</button>
</form>

<script>
$(function($){
	$("#phone").mask("(999) 999-9999");
});
</script>

</body>
</html>