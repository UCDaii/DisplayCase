<?require_once("mysqli_conn.php");?>
<?
if(isset($_POST['UserName']) && isset($_POST['Password'])) {


	$UserName = mysqli_real_escape_string($conn, $_POST['UserName']);
	$Password = mysqli_real_escape_string($conn, $_POST['Password']);

	include "../api/users/UserLogin.php";

	$Count = mysqli_num_rows($Sql);
	if ($Count > 0) { // evaluate the count
		while($Row = mysqli_fetch_array($Sql)){ 
		    $Id = $Row["UserId"];
		    $HPW = $Row["Password"];
		    $Permissions = $Row["Permissions"];
		}
		if(password_verify($Password, $HPW)){
			setcookie('UserName', $UserName, time()+(60*60*24*30), "/", "displaycase.co");
			setcookie('Password', $HPW, time()+(60*60*24*30), "/", "displaycase.co");
			switch ($Permissions){
				case 1:
					header("location: ../../panelChoice");
					break;
				case 2:
					header("location: ../../index");
					break;
				default:
					header("location: ../../index");
			}
			exit();
		} else {
			header("../../login.php");
		}
	} else {
		header("loginError.php");
		exit();
	}
}
?>