<? include "_lib/scripts/mysqli_conn.php"; ?>
<?
if(isset($_GET["UserId"]) && $CookiesValidate){
	$UserId = $_GET["UserId"];
	include "_lib/api/users/GatherUserProfileByUserId.php";
	$Count = mysqli_num_rows($Sql);
	if ($Count > 0) {
		while($Row = mysqli_fetch_array($Sql)){
			$UserId = $Row["UserId"];
		    $Avatar = $Row["Avatar"];
		    $UserName = $Row["UserName"];
		}
	}
}
?>
<? include "head.php"; ?>

<div class="row">
	<h2>Update Profile Picture</h2><br>
	<div class="profileAvatar columns" style="position:relative;background-image:url('<? echo $Avatar; ?>');"></div>
</div>
<br>
<div class="row">
	<form action="_lib/scripts/updateAvatar.php" method="post" enctype="multipart/form-data">
		<input type="file" name="Avatar"/>
		<input type="hidden" name="UserName" value="<? echo $UserName; ?>"/>
		<input type="hidden" name="UserId" value="<? echo $UserId; ?>"/>
		<input class="button" type="submit" value="Save Changes" name="submit"/>
	</form>
</div>
<? include "footer.php"; ?>