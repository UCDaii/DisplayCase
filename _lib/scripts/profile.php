<?
include "mysqli_conn.php";

if(isset($_GET["UserId"])){

	$UserId = $_GET["UserId"];

	// include "../api/users/GatherUserProfileByUserId.php";
	$Sql = mysqli_query($conn, "SELECT Users.UserName, Users.FirstName, Users.LastName, Users.Email, Users.Description, Users.Resume, Users.Avatar, Majors.MajorName, Locations.City, Locations.State, Locations.Country, Colleges.CollegeName, Categories.CategoryName FROM Users JOIN Locations ON Users.LocationId=Locations.LocationId JOIN Colleges ON Users.CollegeId=Colleges.CollegeId JOIN Majors ON Users.MajorId=Majors.MajorId JOIN Categories ON Majors.CategoryId=Categories.CategoryId WHERE Users.UserId='$UserId'");
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
	// include "../api/projects/GatherProjectsByUserId.php";
	$Sql = mysqli_query($conn, "SELECT Projects.ProjectId, Projects.ProjectName, Projects.ProjectDescription, Projects.Rating, Projects.DateAdded, Categories.CategoryName, ProjectMedia.FilePath FROM Projects JOIN Users ON Projects.UserId=Users.UserId JOIN Categories ON Projects.CategoryId=Categories.CategoryId JOIN ProjectMedia ON Projects.ProjectId=ProjectMedia.ProjectId WHERE ProjectMedia.ProjectMediaFeature='1' AND Users.UserId='$UserId'");
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