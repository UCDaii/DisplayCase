<? include "mysqli_conn.php";?>
<?
if(isset($_GET["UserId"])){

	$UserId = $_GET["UserId"];

	// Get User Info
	include ($_SERVER['DOCUMENT_ROOT'].'/_lib/api/users/GatherUserProfileByUserId.php');
	$Count = mysqli_num_rows($Sql);
	if($Count > 0){
		while($Row = mysqli_fetch_array($Sql)){
			$UserName = $Row["UserName"];
			$FirstName = $Row["FirstName"];
			$LastName = $Row["LastName"];
			$Email = $Row["Email"];
			$Description = $Row["Description"];
			$City = $Row["City"];
			$State = $Row["State"];
			$Country = $Row["Country"];
			$Major = $Row["MajorName"];
			$Category = $Row["CategoryName"];
			$College = $Row["CollegeName"];
			$Avatar = $Row["Avatar"];
		}
	}

	// Get User Projects
	include ($_SERVER['DOCUMENT_ROOT'].'/_lib/api/projects/GatherProjectsByUserId.php');
	$Count = mysqli_num_rows($Sql);
	if($Count > 0){
		while($Row = mysqli_fetch_array($Sql)){
			$ProjectId = $Row["ProjectId"];
			$ProjectName = $Row["ProjectName"];
			$Rating = $Row["Rating"];
			$FilePath = $Row["FilePath"];
		}
	}

} else {
	header('Location: index');
}
?>