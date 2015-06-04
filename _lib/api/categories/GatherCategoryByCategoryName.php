<?
$Sql = mysqli_query($conn, "SELECT CategoryId FROM Categories WHERE CategoryName='$CategoryName'") or die ("GatherCategory Failed");
?>