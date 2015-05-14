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
			setcookie('UserName', $UserName, time()+60*60*24*30, 'www.displaycase.co');
			setcookie('Password', $HPW, time()+60*60*24*30, 'wwww.displaycase.co');
			switch ($Permissions){
				case 1:
					echo "Case 1";
					// header("location: ../../panelChoice.php");
					break;
				case 2:
					echo "Case 2";
					// header("location: ../../index.html");
					break;
				default:
					echo "Default";
					// header("location: ../../index.php");
			}
			exit();
		} else {
			header("../../login.php");
		}
	} else {
		echo "Login Error";
		// header("loginError.php");
		exit();
	}
}
?>