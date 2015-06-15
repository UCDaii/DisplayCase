<?
$Sql = mysqli_query($conn, "UPDATE Users SET FirstName='$FirstName', LastName='$LastName', Description='$Description', Email='$Email', Phone='$Phone', Age='$Age', LocationId='$LocationId', MajorId='$MajorId', CollegeId='$CollegeId' WHERE UserId='$UserId'");
?>