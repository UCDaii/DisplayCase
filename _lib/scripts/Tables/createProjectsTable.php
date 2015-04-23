<?php
$ServerName = "localhost";
$UserName = "displayc_aiidev";
$Password = "N2]2jj2C>T7{RskH";
$DBName = "displayc_app";

$conn = mysqli_connect($ServerName, $UserName, $Password, $DBName);
if(!$conn){
	die("Conn failed: " . mysqli_connect_error());
}

$Sql = "CREATE TABLE Projects (
	Id INT(10) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
	UserId Int(10) NOT NULL,
	Name VARCHAR(255) NOT NULL,
	Description VARCHAR(255),
	Category VARCHAR(255) NOT NULL,
	DateAdded TIMESTAMP
	)";
if(mysqli_query($conn, $Sql)){
	echo "Database Created Successfully";
} else {
	echo "Error creating database: " . mysqli_error($conn);
}

mysqli_close($conn);
?>