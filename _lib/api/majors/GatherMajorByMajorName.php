<?
$Sql = mysql_query("SELECT MajorId FROM Majors WHERE MajorName='$MajorName'") or die ("GatherMajor Failed");
?>