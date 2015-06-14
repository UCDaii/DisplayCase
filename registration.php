<? include "head.php"; ?>
<? include "_lib/scripts/mysqli_conn.php"; ?>
<? include "_lib/scripts/categories.php"; ?>

<div class="row">

<h2>Registration</h2>

<form method="POST" action="_lib/scripts/registration.php" enctype="multipart/form-data" name="Registration">
	<label>Username: </label><input name="UserName" type="text" required="true"/><br>
	<label>Password: </label><input name="Password" type="password" required="true"/><br>
	<label>First Name: </label><input name="FirstName" type="text" required="true"/><br>
	<label>Last Name: </label><input name="LastName" type="text" required="true"/><br>
	<label>Email: </label><input name="Email" type="email" required="true"/><br>
	<label>Phone: </label><input id="phone" name="Phone" type="tel"/><br>
	<label>Age: </label><input name="Age" type="number" required="true" /><br>
	<label>City: </label><input name="City" type="text" required="true"/><br>
	<label>State: </label><input name="State" type="text" required="true"/> <br><!--Select with state abbreviation-->
	<label>Country: </label><input name="Country" type="text" required="true"/><br><!--Select with countries-->
	<label>Major: </label><input name="MajorName" type="text" required="true"/><br>
	<label>Major Category: </label>
	<select name="CategoryName" required="true">
	<?
	foreach($CategoryName as $value):
	echo '<option value="' .$value. '">' .$value. '</option>';
	endforeach;
	?>
	</select><br>
	<label>College: </label><input name="CollegeName" type="text" required="true"/><br>
	<button type="submit">Submit</button>
</form>

</div>
<script>
$(function($){
	$("#phone").mask("(999) 999-9999");
});
</script>

<? include "footer.php"; ?>