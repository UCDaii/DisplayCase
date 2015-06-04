<?
$Sql = mysqli_query($conn, "SELECT Users.FirstName, Users.LastName, Projects.ProjectId, Projects.ProjectName, Projects.DateAdded, ProjectMedia.FilePath FROM Users JOIN Projects ON Users.UserId=Projects.UserId JOIN ProjectMedia ON Projects.ProjectId=ProjectMedia.ProjectId WHERE Projects.DateAdded >= DATE_SUB(CURDATE(), INTERVAL 1 MONTH) ORDER BY Projects.Rating DESC LIMIT 8");
?>