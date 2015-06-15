<? include "mysqli_conn.php"; ?>
<?
$uploadsDirectory = $_SERVER["DOCUMENT_ROOT"] . '/_lib/images/users/avatars/'; 
$Avatar = $_POST["Avatar"];
$UserId = $_POST["UserId"];
$UserName = $_POST["UserName"];

@getimagesize($_FILES[$Avatar]['tmp_name']);

$now = time(); 
while(file_exists($uploadFilename = $uploadsDirectory.$now.'-'.$UserId.'-'.$UserName.'-'.$_FILES[$Avatar]['name']))
{
    $now++; 
} 

@move_uploaded_file($_FILES[$Avatar]['tmp_name'], $uploadFilename);

include("../api/users/UpdateAvatar.php");

header('Location: profile.php?UserId=' . $UserId);
?>