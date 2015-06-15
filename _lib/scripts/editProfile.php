<?
if(isset($_GET["UserId"])){

	$UserId = $_GET["UserId"];

	include($_SERVER['DOCUMENT_ROOT'].'/_lib/api/users/GatherUserProfileByUserId.php');
	$Count = mysqli_num_rows($Sql);
	if($Count > 0){
		while($Row = mysqli_fetch_array($Sql)){
			$FirstName = $Row["FirstName"];
			$LastName = $Row["LastName"];
			$Email = $Row["Email"];
			$Phone = $Row["Phone"];
			$Age = $Row["Age"];
			$Description = $Row["Description"];
			$City = $Row["City"];
			$State = $Row["State"];
			$Country = $Row["Country"];
			$Major = $Row["MajorName"];
			$Category = $Row["CategoryName"];
			$College = $Row["CollegeName"];
		}
	}

} else {
	header("Location: index.php");
}

?>