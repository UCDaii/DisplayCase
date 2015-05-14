<?
$Sql = mysqli_query($conn, "SELECT CollegeId, CollegeName, LocationId FROM Colleges WHERE CollegeName='$CollegeName'") or die ("GatherColleges Failed");
?>