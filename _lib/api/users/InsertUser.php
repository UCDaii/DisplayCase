<?
$Sql = mysql_query("INSERT INTO Users (UserName, FirstName, LastName, Email, Phone, Age, LocationId, MajorId, CollegeId, Password) Values ('$UserName', '$FirstName', '$LastName', '$Email', '$Phone', '$Age', '$LocationId', '$MajorId', '$CollegeId', '$Password')") or die ("InsertUser Failed");
?>