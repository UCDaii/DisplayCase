<? include "mysqli_conn.php"; ?>
<? 

if(isset($_GET["UserId"])){
	$UserId = $_GET["UserId"];
	$FirstName = mysqli_real_escape_string($conn, $_POST['FirstName']);
	$LastName = mysqli_real_escape_string($conn, $_POST['LastName']);
	$Description = mysqli_real_escape_string($conn, $_POST['Description']);
	$Email = mysqli_real_escape_string($conn, $_POST['Email']);
	$Phone = mysqli_real_escape_string($conn, $_POST['Phone']);
	$Age = mysqli_real_escape_string($conn, $_POST['Age']);
	$City = mysqli_real_escape_string($conn, $_POST['City']);
	$State = mysqli_real_escape_string($conn, $_POST['State']);
	$Country = mysqli_real_escape_string($conn, $_POST['Country']);
	$MajorName = mysqli_real_escape_string($conn, $_POST['MajorName']);
	$CategoryName = mysqli_real_escape_string($conn, $_POST['CategoryName']);
	$CollegeName = mysqli_real_escape_string($conn, $_POST['CollegeName']);
	$LocationId = 0;
	$CollegeId = 0;
	$MajorId = 0;

	// Check if Location is in DB
	include "../api/locations/GatherLocationByLocationName.php";
	$Count = mysqli_num_rows($Sql);
	if ($Count > 0) {
		while($Row = mysqli_fetch_array($Sql)){ 
		    $LocationId = $Row["LocationId"];
		}
	} else {
		include "../api/locations/InsertLocation.php";
		include "../api/locations/GatherLocationByLocationName.php";
		$Count = mysqli_num_rows($Sql);
		if ($Count > 0){
			while($Row = mysqli_fetch_array($Sql)){
				$LocationId = $Row["LocationId"];
			}
		}
	}

	// Check if College is in DB
	include "../api/colleges/GatherCollegeByCollegeName.php";
	$Count = mysqli_num_rows($Sql);
	if ($Count > 0){
		while($Row = mysqli_fetch_array($Sql)){
			$CollegeId = $Row["CollegeId"];
		}
	} else {
		include "../api/colleges/InsertCollege.php";
		include "../api/colleges/GatherCollegeByCollegeName.php";
		$Count = mysqli_num_rows($Sql);
		if ($Count > 0){
			while($Row = mysqli_fetch_array($Sql)){
				$CollegeId = $Row["CollegeId"];
			}
		}
	}

	// Get Category Id
	include "../api/categories/GatherCategoryByCategoryName.php";
	$Count = mysqli_num_rows($Sql);
	if($Count > 0){
		while($Row = mysqli_fetch_array($Sql)){
			$CategoryId = $Row["CategoryId"];
		}
	}

	// Check if Major is in DB
	include "../api/majors/GatherMajorByMajorName.php";
	$Count = mysqli_num_rows($Sql);
	if($Count > 0){
		while($Row = mysqli_fetch_array($Sql)){
			$MajorId = $Row["MajorId"];
		}
	} else {
		include "../api/majors/InsertMajor.php";
		include "../api/majors/GatherMajorByMajorName.php";
		$Count = mysqli_num_rows($Sql);
		if($Count > 0){
			while($Row = mysqli_fetch_array($Sql)){
				$MajorId = $Row["MajorId"];
			}
		}
	}

	include "../api/users/UpdateProfile.php";
	header('Location: ../../profile.php?UserId=' . $UserId);

}

?>