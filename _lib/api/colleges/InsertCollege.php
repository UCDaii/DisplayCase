<?
$Sql = mysqli_query($conn, "INSERT INTO Colleges (CollegeName, LocationId) VALUES ('$CollegeName', '$LocationId')") or die ("InsertCollege Failed");
?>