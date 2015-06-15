<?
$Sql = mysqli_query($conn, "UPDATE Users SET Avatar='$uploadFilename' WHERE UserId='$UserId'");
?>