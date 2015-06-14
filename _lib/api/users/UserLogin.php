<?
$Sql = mysqli_query($conn, "SELECT UserId, UserName, FirstName, Password, Permissions FROM Users WHERE UserName='$UserName'");
?>