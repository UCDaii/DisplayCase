<?
$Sql = mysql_query("SELECT id FROM Users WHERE UserName='$UserName' AND Password='$Password' LIMIT 1");
?>