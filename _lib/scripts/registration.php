<?
include "mysqli_conn.php"; 
// Parse the form data and add inventory item to the system
if (isset($_POST['UserName'])) {
	
    $UserName = mysqli_real_escape_string($conn, $_POST['UserName']);
	$Password = mysqli_real_escape_string($conn, $_POST['Password']);
	$FirstName = mysqli_real_escape_string($conn, $_POST['FirstName']);
	$LastName = mysqli_real_escape_string($conn, $_POST['LastName']);
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

	$HashedPW = password_hash('$Password', PASSWORD_DEFAULT);

	// Check if User is in DB
	include "../api/users/GatherUserByUserName.php";
	$Count = mysqli_num_rows($Sql); // count the row nums
	if ($Count > 0) { // evaluate the count
		echo("You is already registrated");
	}

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

	include "../api/users/InsertUser.php";
}
?>