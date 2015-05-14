<?
$Sql = mysql_query("SELECT CollegeId, CollegeName, LocationId FROM Colleges WHERE CollegeName='$CollegeName'") or die ("GatherColleges Failed");
?>