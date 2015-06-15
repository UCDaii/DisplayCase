<?
$Sql = mysqli_query($conn, "INSERT INTO Projects (UserId, ProjectName, ProjectDescription, CategoryId) values ($UserId, $ProjectName, $ProjectDescription, $CategoryId");
?>