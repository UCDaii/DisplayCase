<?php
$ServerName = "localhost";
$UserName = "displayc_aiidev";
$Password = "N2]2jj2C>T7{RskH";
$DBName = "displayc_app";

$conn = mysqli_connect($ServerName, $UserName, $Password, $DBName);
if(!$conn){
	die("Conn failed: " . mysqli_connect_error());
}

$Sql = "CREATE TABLE Locations (
	Id INT(10) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
	City VARCHAR(255) NOT NULL,
	STATE VARCHAR(255) NOT NULL,
	COUNTRY VARCHAR(255) NOT NULL,
	DateAdded TIMESTAMP
	)";
if(mysqli_query($conn, $Sql)){
	echo "Locations Table Created Successfully";
} else {
	echo "Error creating database: " . mysqli_error($conn);
}

mysqli_close($conn);
?>