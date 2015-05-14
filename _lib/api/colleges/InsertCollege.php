<?
$Sql = mysql_query("INSERT INTO Colleges (CollegeName, LocationId) VALUES ('$CollegeName', '$LocationId')") or die ("InsertCollege Failed");
?>