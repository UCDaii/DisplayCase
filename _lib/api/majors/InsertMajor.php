<?
$Sql = mysql_query("INSERT INTO Majors (MajorName, CategoryId) VALUES ('$MajorName', '$CategoryId')") or die ("InsertMajor Failed");
?>