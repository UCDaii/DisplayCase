<?
$Sql = mysqli_query($conn, "INSERT INTO Users (UserName, FirstName, LastName, Email, Phone, Age, LocationId, MajorId, CollegeId, Password) Values ('$UserName', '$FirstName', '$LastName', '$Email', '$Phone', '$Age', '$LocationId', '$MajorId', '$CollegeId', '$HashedPW')") or die ("InsertUser Failed");
?>