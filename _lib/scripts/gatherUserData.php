<?
if(isset($_POST["Id"])){

	$Id = $_POST["Id"];

	require_once("mysql_conn.php");
	require_once("../api/users/profileApi.php");

	$Count = mysql_num_rows($Result);
	if ($Count == 1) {
		while ($row = mysql_fetch_array($Result)){
			$Id = $row["Id"];
			$UserName = $row["UserName"];
			$FirstName = $row["FirstName"];
			$LastName = $row["LastName"];
			$Email = $row["Email"];
			$Phone = $row["Phone"];
			$Description = $row["Description"];
			$City =  $row["City"];
			$State = $row["State"];
			$Country = $row["Country"];
			$Major = $row["MajorName"];
			$MajorCat = $row["MajorCategory"];
			$College = $row["CollegeName"];
		}
	} else {
		echo("Woops, looks like that user doesn't not exist!");
	}

} else {
	header("location: ../../index.php");
}
?>