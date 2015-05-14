<?
$Sql = mysqli_query($conn, "SELECT UserId, UserName, Password, Permissions FROM Users WHERE UserName='$UserName'");
?>