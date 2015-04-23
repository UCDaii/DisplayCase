<?require_once("mysql_conn.php");?>
<?
if(isset($_POST['UserName']) && isset($_POST['Password'])) {

	$UserName = $_POST['UserName'];
	$Password = $_POST['Password'];

	require_once("../api/users/loginApi.php");

	$Count = mysql_num_rows($Result); // count the row nums
	if ($Count == 1) { // evaluate the count
		while($row = mysql_fetch_array($Result)){ 
		    $Id = $row["Id"];
		    $UserName = $row["UserName"];
		    $Password = $row["Password"];
		    $Permissions = $row["Permissions"];
		}
		setcookie('UserName', $_POST['UserName'], time()+60*60*24*30, 'www.displaycase.co');
		setcookie('Password', md5($_POST['Password']), time()+60*60*24*30, 'wwww.displaycase.co');
		switch ($Permissions){
			case 1:
				header("location: ../../panelChoice.php");
				break;
			case 2:
				header("location: ../../profile.php");
				break;
			default:
				header("location: ../../index.php");
		}
		exit();
	} else {
		echo 'That information is incorrect, try again <a href="Login.php">Click Here</a>';
		exit();
	}

}
?>