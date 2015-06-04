<? include "mysqli_conn.php";?>
<?
if(isset($_GET["UserId"]))){

	$UserId = $_GET["UserId"];

	// Get User Info
	include "../api/users/GatherUserProfileByUserId.php";
	$Count = mysqli_num_rows($Sql);
	if($Count > 0){
		while($Row = mysqli_fetch_array($Sql)){
			$FirstName = $Row["FirstName"];
			$LastName = $Row["LastName"];
			$Email = $Row["Email"];
			$City = $Row["City"];
			$State = $Row["State"];
			$Country = $Row["Country"];
			$Major = $Row["MajorName"];
			$Category = $Row["CategoryName"];
			$College = $Row["CollegeName"];
		}
	}

	// Get User Projects
	include "../api/projects/GatherProjectsByUserId.php";
	$Count = mysqli_num_rows($Sql);
	if($Count > 0){
		while($Row = mysqli_fetch_array($Sql)){
			$ProjectId = $Row["ProjectId"];
			$ProjectName = $Row["ProjectName"];
			$Rating = $Row["Rating"];
			$FilePath = $Row["FilePath"];
		}
	}

}
?>