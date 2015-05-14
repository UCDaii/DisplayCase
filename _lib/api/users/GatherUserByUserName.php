<?
$Sql = mysqli_query($conn, "SELECT UserId FROM Users WHERE UserName='$UserName' LIMIT 1") or die ("GatherUser Failed");
?>