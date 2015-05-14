<?
$Sql = mysql_query("SELECT UserId FROM Users WHERE UserName='$UserName' LIMIT 1") or die ("GatherUser Failed");
?>