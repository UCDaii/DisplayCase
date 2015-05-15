<?
$Sql = mysqli_query($conn, "SELECT MajorId FROM Majors WHERE MajorName='$MajorName'") or die ("GatherMajor Failed");
?>