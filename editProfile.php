<? include "_lib/scripts/states.php"; ?>
<? include "_lib/scripts/countries.php"; ?>
<? include "_lib/scripts/schools.php"; ?>
<? include "_lib/scripts/mysqli_conn.php"; ?>
<? include "_lib/scripts/categories.php"; ?>
<? include "_lib/scripts/editProfile.php"; ?>
<? include "head.php"; ?>
<div class="row">

<h2>Edit Profile</h2>

<form method="POST" action="_lib/scripts/updateProfile.php?UserId=<? echo $UserId; ?>" enctype="multipart/form-data" name="EditProfile">
	<label>First Name: </label><input name="FirstName" type="text" required="true" value="<? echo $FirstName; ?>"/><br>
	<label>Last Name: </label><input name="LastName" type="text" required="true" value="<? echo $LastName; ?>"/><br>
	<label>Description: </label><textarea maxlength="240" name="Description"><? echo $Description; ?></textarea><label>(Max 240 Characters)</label><br>
	<label>Email: </label><input name="Email" type="email" required="true" value="<? echo $Email; ?>"/><br>
	<label>Phone: </label><input id="phone" name="Phone" type="tel" value="<? echo $Phone; ?>"/><br>
	<label>Age: </label><input name="Age" type="number" required="true" value="<? echo $Age; ?>"/><br>
	<label>City: </label><input name="City" type="text" required="true" value="<? echo $City; ?>"/><br>
	<label>State: </label>
	<select name="State" required="true">
	<option value="<? echo $State; ?>"><? echo $State; ?></option>
	<?
	foreach($States as $value):
		echo '<option value="' . $value . '">' . $value . '</option>';
	endforeach;
	?>
	</select>
	<br>
	<label>Country: </label>
	<select name="Country" required="true"/>
	<option value="<? echo $Country; ?>"><? echo $Country; ?></option>
	<?
	foreach ($Countries as $value):
		echo '<option value="' . $value . '">' . $value . '</option>';
	endforeach;
	?>
	</select>
	<br>
	<label>Major: </label><input name="MajorName" type="text" required="true" value="<? echo $Major; ?>"/><br>
	<label>Major Category: </label>
	<select name="CategoryName" required="true">
	<option value="<? echo $Category; ?>"><? echo $Category; ?></option>
	<?
	foreach($CategoryName as $value):
		echo '<option value="' .$value. '">' .$value. '</option>';
	endforeach;
	?>
	</select><br>
	<label>College: </label>
	<select name="CollegeName" required="true"/>
	<option value="<? echo $College; ?>"><? echo $College; ?></option>
	<?
	foreach ($Schools as $value):
		echo '<option value="' . $value . '">' . $value . '</option>';
	endforeach;
	?>
	</select>
	<br>
	<button type="submit">Submit</button>
</form>

</div>
<script>
$(function($){
	$("#phone").mask("(999) 999-9999");
});

$('textarea').on('keyup', function(){
	limitText(this, 240)
});

function limitText(field, maxChar){
	var ref = $(field),
		val = ref.val();
	if(val.length >= maxChar){
		ref.val(function(){
			console.log(val.substr(0, maxChar))
			return val.substr(0, maxChar);
		});
	}
}
</script>

<? include "footer.php"; ?>