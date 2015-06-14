<? include "head.php"; ?>
<? include "_lib/scripts/mysqli_conn.php"; ?>
<? include "_lib/scripts/categories.php"; ?>
<div id="formdiv">
<h2>Multiple Image Upload Form</h2>
	<form enctype="multipart/form-data" action="_lib/scripts/AddProject.php" method="post">
		<input name="ProjectName" type="text" placeholder="Project Name"/>
		<textarea name="ProjectDescription" placeholder="Project Description">
		</textarea>
		<select name ="CategoryName">
		<?
		foreach($CategoryName as $value):
		echo '<option value="' .$value. '">' .$value. '</option>';
		endforeach;
		?>
		</select>
		First Field is Compulsory. Only JPEG,PNG,JPG Type Image Uploaded. Image Size Should Be Less Than 2MB.
		<div id="filediv"><input name="file[]" type="file" id="file"/></div>
		<input type="button" id="add_more" class="upload" value="Add More Files"/>
		<input type="submit" value="Upload File" name="submit" id="upload" class="upload"/>
	</form>
</div>

<script src="_lib/js/ImageUploadScripts.js"></script>

<? include "footer.php"; ?>