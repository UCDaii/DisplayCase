<?
$Sql = mysqli_query($conn, "INSERT INTO Majors (MajorName, CategoryId) VALUES ('$MajorName', '$CategoryId')") or die ("InsertMajor Failed");
?>