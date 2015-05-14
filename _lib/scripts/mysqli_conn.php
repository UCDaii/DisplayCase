<?
$dbHost = "localhost";
$dbUsername = "displayc_aiidev";
$dbPassword = "N2]2jj2C>T7{RskH";
$dbName = "displayc_app";

$conn = mysqli_connect("$dbHost", "$dbUsername", "$dbPassword") or die ("Mysqli connection failed.");
mysqli_select_db($conn, "$dbName") or die ("Couldn't find database.");
?>