<?
$Sql = mysqli_query($conn, "SELECT UserId, UserName, FirstName, Password, Permissions, Avatar FROM Users WHERE UserName='$UserName'");
?>