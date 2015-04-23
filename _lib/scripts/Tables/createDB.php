<?php
$ServerName = "localhost";
$UserName = "displayc_aiidev";
$Password = "N2]2jj2C>T7{RskH";
$DBName = "displayc_app";

$conn = mysqli_connect($ServerName, $UserName, $Password, $DBName);
if(!$conn){
	die("Conn failed: " . mysqli_connect_error());
}

$Sql = "CREATE TABLE Users (
	Id INT(10) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
	UserName VARCHAR(30) NOT NULL,
	FirstName VARCHAR(30) NOT NULL,
	LastName VARCHAR(30) NOT NULL,
	Email VARCHAR(50) NOT NULL,
	Phone INT(10) NOT NULL,
	Age INT(3) NOT NULL,
	Description VARCHAR(255),
	Permissions INT(1) NOT NULL,
	LocationId INT(6) NOT NULL,
	MajorId INT(3) NOT NULL,
	CollegeId INT(6),
	Password VARCHAR(30) NOT NULL,
	DateAdded TIMESTAMP
	)";
if(mysqli_query($conn, $Sql)){
	echo "Database Created Successfully";
} else {
	echo "Error creating database: " . mysqli_error($conn);
}

mysqli_close($conn);
?>