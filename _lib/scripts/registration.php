<?
include "mysql_conn.php"; 
// Parse the form data and add inventory item to the system
if (isset($_POST['UserName'])) {
	
    $UserName = mysql_real_escape_string($_POST['UserName']);
	$Password = mysql_real_escape_string($_POST['Password']);
	$FirstName = mysql_real_escape_string($_POST['FirstName']);
	$LastName = mysql_real_escape_string($_POST['LastName']);
	$Email = mysql_real_escape_string($_POST['Email']);
	$Phone = mysql_real_escape_string($_POST['Phone']);
	$Age = mysql_real_escape_string($_POST['Age']);
	$City = mysql_real_escape_string($_POST['City']);
	$State = mysql_real_escape_string($_POST['State']);
	$Country = mysql_real_escape_string($_POST['Country']);
	$MajorName = mysql_real_escape_string($_POST['MajorName']);
	$CategoryName - mysql_real_escape_string($_POST['CategoryName']);
	$CollegeName = mysql_real_escape_string($_POST['CollegeName']);
	$LocationId = 0;
	$CollegeId = 0;
	$MajorId = 0;

	// Check if User is in DB
	include "../api/users/GatherUserByUserName.php";
	$Count = mysql_num_rows($Sql); // count the row nums
	if ($Count > 0) { // evaluate the count
		echo("You is already registrated");
	}

	// Check if Location is in DB
	include "../api/locations/GatherLocationByLocationName.php";
	$Count = mysql_num_rows($Sql);
	if ($Count > 0) {
		while($Row = mysql_fetch_array($Sql)){ 
		    $LocationId = $Row["LocationId"];
		}
	} else {
		include "../api/locations/InsertLocation.php";
		include "../api/locations/GatherLocationByLocationName.php";
		$Count = mysql_num_rows($Sql);
		if ($Count > 0){
			while($Row = mysql_fetch_array($Sql)){
				$LocationId = $Row["LocationId"];
			}
		}
	}

	// Check if College is in DB
	include "../api/colleges/GatherCollegeByCollegeName.php";
	$Count = mysql_num_rows($Sql);
	if ($Count > 0){
		while($Row = mysql_fetch_array($Sql)){
			$CollegeId = $Row["CollegeId"];
		}
	} else {
		include "../api/colleges/InsertCollege.php";
		include "../api/colleges/GatherCollegeByCollegeName.php";
		$Count = mysql_num_rows($Sql);
		if ($Count > 0){
			while($Row = mysql_fetch_array($Sql)){
				$CollegeId = $Row["CollegeId"];
			}
		}
	}

	// Get Category Id
	include "../api/categories/GatherCategoryByCategoryName.php";
	$Count = mysql_num_rows($Sql);
	if($Count > 0){
		while($Row = mysql_fetch_array($Sql)){
			$CategoryId = $Row["CategoryId"];
		}
	}

	// Check if Major is in DB
	include "../api/majors/GatherMajorByMajorName.php";
	$Count = mysql_num_rows($Sql);
	if($Count > 0){
		while($Row = mysql_fetch_array($Sql)){
			$MajorId = $Row["MajorId"];
		}
	} else {
		include "../api/majors/InsertMajor.php";
		include "../api/majors/GatherMajorByMajorName.php";
		$Count = mysql_num_rows($Sql);
		if($Count > 0){
			while($Row = mysql_fetch_array($Sql)){
				$MajorId = $Row["MajorId"];
			}
		}
	}

	include "../api/users/InsertUser.php";
}
?>