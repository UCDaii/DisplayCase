<?
$dbHost = "localhost";
$dbUsername = "displayc_aiidev";
$dbPassword = "N2]2jj2C>T7{RskH";
$dbName = "displayc_app";

mysql_connect("$dbHost", "$dbUsername", "$dbPassword") or die ("Mysql connection failed.");
mysql_select_db("$dbName") or die ("Couldn't find database.");
?>