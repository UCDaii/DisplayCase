<?
$Sql = mysql_query("SELECT CategoryId FROM Categories WHERE CategoryName='$CategoryName'") or die ("GatherCategory Failed");
?>